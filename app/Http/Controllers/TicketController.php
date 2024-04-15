<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\TicketService;
use Illuminate\Support\Carbon;
use App\Models\Service;
use App\Models\Status;
use App\Models\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\FillForm;

class TicketController extends Controller
{

    public $amount = 0;
    public $txtActivity = '';
    public function index(Request $request){
        $status = Status::where('slug', 'waiting')->first();

        $tickets = Ticket::whereDate('date_time', Carbon::today())->orderBy('date_time','asc')->where('status_id', $status->id)->paginate(10);

        if ($request->has('to_date')) {
            $tickets = Ticket::whereBetween('date_time',[$request->from_date.' 00:00:00', $request->to_date.' 23:59:59'])->where('status_id', $request->selected_status)->orderBy('date_time','asc')->paginate(10);
        }   

        $amount = 0;

        $statuses = Status::get();

        return view('admin.index', compact('tickets', 'amount', 'statuses'));
    }

    public function setStatus(Ticket $ticket, $status){
        if(auth()->user()->isAdmin() == false && $ticket->status_id == Status::where('slug', 'waiting')->first()->id){
            $ticket->status_id = $status;
            $ticket->save();
        }
        else if(auth()->user()->isAdmin() == true){
            $ticket->status_id = $status;
            $ticket->save();

            $activity = new Notification();

            $activity->createActivity($ticket, auth()->user(), 
            auth()->user()->name . ' промени статуса на билет ' . '<a href="'.route('admin.ticket.edit', ['ticket' => $ticket->id]).'">'.$ticket->id.'</a> на '.
            $ticket->status->name.' в ' . '('.date("Y-m-d h:i:sa").')');
        }
        else{
            return redirect()->back()->with('wrong', 'Не може да направите това!');
        }
        

        return redirect()->back()->with('success', 'Статусът беше променен успешно!');
    }

    public function search(Request $request){
        $tickets = Ticket::where('name', 'like', "%{$request->search}%")
                 ->orWhere('phone', 'like', "%{$request->search}%")
                 ->paginate(10);

        $amount = 0;

        $search = $request->search;

        $statuses = Status::get();

        return view('admin.index', compact('tickets', 'amount', 'statuses', 'search'));
    }

    public function create(){
        return view('admin.tickets.create');
    }

    public function store(Request $request){
        
        $incoming_fields = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'date_time' => 'required'
        ]);

        $ticket = Ticket::create($incoming_fields);

        $activity = new Notification();

            $activity->createActivity($ticket, auth()->user(), 
            auth()->user()->name . ' създаде билет ' . '<a href="'.route('admin.ticket.edit', ['ticket' => $ticket->id]).'">'.$ticket->id.'</a>'.
            ' в ' . '('.date("Y-m-d h:i:sa").')');

        return redirect(route('admin.index'))->with('success', 'Билетът е създаден успешно!');
    }

    public function fillingForm(Request $request){
        
        
        $incoming_fields = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'date_time' => 'required'
        ]);

        $ticket = Ticket::create($incoming_fields);

        $notification = new Notification();

        $notification->createNotification($ticket, $request->name);

        $services = Service::get();

        foreach($services as $service){
            if($request['service_'. $service->id] != null){
                 $ticketService = TicketService::create([
                    'name' => $service->name,
                    'quantity' => $request['quantity_'. $service->id],
                    'service_id' => $service->id,
                    'ticket_id' => $ticket->id
                 ]);
                 $this->amount += $ticketService->service->price * $ticketService->quantity;
            }

            
        }

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new FillForm($request->name, $request->phone, $request->address, $request->date_time, $ticket->TicketServices, $this->amount));

        $this->amount = 0;

        return redirect()->back()->with('success', 'Заявката беше изпратена успешно!');
    }

    public function edit(Ticket $ticket){

        $statuses = Status::get();

        $amount = 0;

        $completed = Status::where('slug', 'completed')->first()->id;

        $canceled = Status::where('slug', 'canceled')->first()->id;

        $waiting = Status::where('slug', 'waiting')->first()->id;
      
        return view('admin.tickets.edit', compact('ticket', 'amount', 'statuses', 'completed', 'canceled', 'waiting'));
    }

    public function editService(TicketService $ticketService){

        $services = Service::get();

        return view('admin.tickets.editService', compact('ticketService', 'services'));
    }

    public function createService(Ticket $ticket){

        $services = Service::get();

        return view('admin.tickets.createService', compact('ticket', 'services'));
    }

    public function storeService(Ticket $ticket, Request $request){

        $incomingFields = $request->validate([
            'quantity' => 'required',
            'service' => 'required'
        ]);

        $theService = Service::find($request->service);

        $activity = new Notification();

        

        $ticketService = TicketService::create([
            'name' => $theService->name,
            'quantity' => $request->quantity,
            'ticket_id' => $ticket->id,
            'service_id' => $request->service
        ]);

        $activity->createActivity($ticket, auth()->user(), 
        auth()->user()->name . ' създаде услуга в билет ' . '<a href="'.route('admin.ticket.edit', ['ticket' => $ticket->id]).'">'
        .$ticketService->ticket->id.'</a> (('.$ticketService->name.') & ('.$ticketService->quantity.')) '.
        '('.date("Y-m-d h:i:sa").')');

        return redirect(route('admin.ticket.edit', ['ticket' => $ticket->id]))->with('success', 'Услугата е добавена успешно!');
    }

    public function updateService(TicketService $ticketService, Request $request){
        
        $request->validate([
            'service' => 'required',
            'quantity' => 'required',
        ]);

        $theService = Service::find($request->service);

        $activity = new Notification();

        $activity->createActivity($ticketService->ticket, auth()->user(), 
        auth()->user()->name . ' промени услуга в билет ' . '<a href="'.route('admin.ticket.edit', ['ticket' => $ticketService->ticket->id]).'">'
        .$ticketService->ticket->id.'</a> от (('.$ticketService->name.') & ('.$ticketService->quantity.')) '.' на (('.$theService->name.') & ('.$request->quantity.')) ' . '('.date("Y-m-d h:i:sa").')');
        
        $ticketService->name = $theService->name;
        $ticketService->service_id = $theService->id;
        $ticketService->quantity = $request->quantity;
        $ticketService->save();

        return redirect(route('admin.ticket.edit', ['ticket' => $ticketService->ticket_id]))->with('success', 'Услугата е обновена успешно!');
    }

    public function destroyService(TicketService $ticketService){
        $theId = $ticketService->ticket_id;

        

        $activity = new Notification();

            $activity->createActivity($ticketService->ticket, auth()->user(), 
            auth()->user()->name . ' изтри услуга към билет ' . '<a href="'.route('admin.ticket.edit', ['ticket' => $ticketService->ticket->id]).'">'.
            $ticketService->ticket->id.'</a>'.
            ' | (('.$ticketService->name.') & ('.$ticketService->quantity.')) ' . '('.date("Y-m-d h:i:sa").')');

            $ticketService->delete();

        return redirect(route('admin.ticket.edit', ['ticket' => $theId]))->with('success', 'Услугата е изтрита успешно!');
    }

    public function update(Ticket $ticket, Request $request){
        
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'date_time' => 'required'
        ]);

        $ticket->status_id = $request->selected_status;
        $ticket->name = $request->name;
        $ticket->phone = $request->phone;
        $ticket->address = $request->address;
        $ticket->date_time = $request->date_time;
        $ticket->save();

        return redirect()->back()->with('success', 'Билетът е редактиран успешно!');
    }

    public function destroy(Ticket $ticket){

        $ticketServices = $ticket->TicketServices()->get();

        foreach($ticketServices as $ticketService){
            $this->txtActivity .= '<br>' . $ticketService->name . ' / ' . 'кв.м. / количество: ' . $ticketService->quantity . '<br>';
            $this->amount += $ticketService->service->price * $ticketService->quantity;
            $ticketService->delete();
        }

        $activity = new Notification();

        $activity->createActivity($ticket, auth()->user(), 
        auth()->user()->name . ' изтри билет ' . '<a href="'.route('admin.ticket.edit', ['ticket' => $ticket->id]).'">'.
        $ticket->id.'</a>'.
        ' <br> Име: '. $ticket->name . '<br>Телефон: ' . $ticket->phone . '<br>Адрес: ' . $ticket->address . '<br>Дата и час за посещение: ' . $ticket->date_time .
        
       $this->txtActivity
        
        . '<br>Изтрит на: ('.date("Y-m-d h:i:sa").') <br>Цена: ' . $this->amount);

        $this->amount = 0;

        

        $ticket->delete();

        return redirect(route('admin.index'))->with('success', 'Билетът беше изтрит успешно!');
    }
}

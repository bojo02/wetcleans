<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy('created_at','desc')->paginate(10);

        return view('admin.services.index', ['services' => $services]);
    }

    public function create(){
        return view('admin.services.create');
    }

    public function store(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'price' => ['required'],
        ]);

        $service = Service::create($incomingFields);

        if(!empty($request->is_square)){
             $service->is_square = 1;
             $service->save();
        }

        return redirect()->route('admin.service.edit', ['service' => $service->id])->with('success', 'Услугата беше добавена успешно!');
    }

    public function edit(Service $service){
        return view('admin.services.edit', compact('service'));
    }

    public function update(Service $service, Request $request){
         $request->validate([
            'name' => 'required',
            'price' => ['required'],
        ]);

        if(!empty($request->is_square)){
            $service->is_square = 1;
        }
        else{
            $service->is_square = 0;
        }

        $service->name = $request->name;
        $service->price = $request->price;
        $service->save();

        return redirect()->back()->with('success', 'Услугата беше редактирана успешно!');
    }

    public function delete(Service $service){
        $service->delete();

        return redirect(route('admin.services.index'))->with('success', 'Услугата беше изтрита успешно!');
    }
}

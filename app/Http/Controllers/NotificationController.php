<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\SeenNotification;
use App\Models\User;

class NotificationController extends Controller
{
    public function index(){
        $notifications = auth()->user()->notifications();

        return view('admin.notifications.index', compact('notifications'));
    }

    public function show(Notification $notification){
        return view('admin.notifications.show', ['notification' => $notification]);
    }

    public function notSeen(){
        return view('admin.notifications.index');
    }

    public function Seen(){
        return view('admin.notifications.index');
    }

    public function create(){
        return view('admin.notifications.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required'
        ]);

        $data = [
            'title' => $request->title,
            'user_id' => auth()->user()->id
        ];

        $notification = Notification::create($data);

        $users = User::get();

        foreach($users as $user){
            SeenNotification::create([
                'notification_id' => $notification->id,
                'user_id' => $user->id
            ]);
        }

        return redirect()->route('admin.notification.edit', ['notification' => $notification->id])->with('success', 'Нотификацията е добавена успешно!');
    }

    public function edit(Notification $notification){
        return view('admin.notifications.edit', compact('notification'));
    }

    public function update(Request $request, Notification $notification){
        $request->validate([
            'title' => 'required'
        ]);

        $data = [
            'title' => $request->title,
        ];

        $notification->update($data);

        return redirect()->back()->with('success', 'Нотификацията е обновена успешно!');
    }

    public function delete(Notification $notification){
        foreach($notification->seenNotifications as $seenNotification){
            $seenNotification->delete();
        }

        $notification->delete();

        

        return redirect()->route('admin.notification.index')->with('success', 'Нотификацията беше изтрита успешно!');
    }

    public function makeSeen(Notification $notification){
        $seenNotification = SeenNotification::where('user_id', auth()->user()->id)->where('notification_id', $notification->id)->first();

        $seenNotification->update([
            'seen' => 1
        ]);

        return redirect()->back()->with('success', 'Нотификацията беше отбелязана като прегледана!');
    }

    public function makeUnseen(Notification $notification){
        $seenNotification = SeenNotification::where('user_id', auth()->user()->id)->where('notification_id', $notification->id)->first();

        $seenNotification->update([
            'seen' => 0
        ]);

        return redirect()->back()->with('success', 'Нотификацията беше отбелязана като НЕ прегледана!');
    }
}

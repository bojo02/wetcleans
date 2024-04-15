<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\SeenNotification;
use App\Models\User;

class ActivityController extends Controller
{
    public function index(){
        $notifications = auth()->user()->activityLog();

        return view('admin.activity.index', compact('notifications'));
    }

    public function show(Notification $notification){
        return view('admin.activity.show', ['notification' => $notification]);
    }

    public function notSeen(){
        return view('admin.activity.index');
    }

    public function Seen(){
        return view('admin.activity.index');
    }

    public function create(){
        return view('admin.activity.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required'
        ]);

        $data = [
            'title' => $request->title,
            'user_id' => auth()->user()->id,
            'type' => 'activity'
        ];

        $notification = Notification::create($data);

        $users = User::get();

        foreach($users as $user){
            SeenNotification::create([
                'notification_id' => $notification->id,
                'user_id' => $user->id,
                'type' => 'activity'
            ]);
        }

        return redirect()->route('admin.activity.edit', ['notification' => $notification->id])->with('success', 'Activity-то е добавено успешно!');
    }

    public function edit(Notification $notification){
        return view('admin.activity.edit', compact('notification'));
    }

    public function update(Request $request, Notification $notification){
        $request->validate([
            'title' => 'required'
        ]);

        $data = [
            'title' => $request->title,
        ];

        $notification->update($data);

        return redirect()->back()->with('success', 'Activity-то е обновено успешно!');
    }

    public function delete(Notification $notification){
        foreach($notification->seenNotifications as $seenNotification){
            $seenNotification->delete();
        }

        $notification->delete();

        return redirect()->route('admin.activity.index')->with('success', 'Activity-то беше изтрито успешно!');
    }

    public function makeSeen(Notification $notification){
        $seenNotification = SeenNotification::where('user_id', auth()->user()->id)->where('notification_id', $notification->id)->first();

        $seenNotification->update([
            'seen' => 1
        ]);

        return redirect()->back()->with('success', 'Activity-то беше отбелязано като прегледано!');
    }

    public function makeUnseen(Notification $notification){
        $seenNotification = SeenNotification::where('user_id', auth()->user()->id)->where('notification_id', $notification->id)->first();

        $seenNotification->update([
            'seen' => 0
        ]);

        return redirect()->back()->with('success', 'Activity-то беше отбелязано като НЕ прегледано!');
    }
}

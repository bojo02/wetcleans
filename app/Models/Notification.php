<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'type'
    ];

    public function seenNotifications(){
        return $this->hasMany(SeenNotification::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function createNotification(Ticket $ticket, $name){
        

        $notification = Notification::create([
            'title' => "НОВА ПОРЪЧКА от " . $name . '. <a href="' . route('admin.ticket.edit', ['ticket' => $ticket->id]) .'">Отвори билета </a>',
            'user_id' => 0
        ]);

        $users = User::get();

        foreach($users as $user){
            SeenNotification::create([
                'notification_id' => $notification->id,
                'user_id' => $user->id
            ]);
        }
    }

    public static function createActivity(Ticket $ticket, User $user, $text){
        
        $notification = Notification::create([
            'title' => $text,
            'user_id' => $user->id,
            'type' => 'activity'
        ]);

        $users = User::get();

        foreach($users as $theUser){
           
                SeenNotification::create([
                    'notification_id' => $notification->id,
                    'user_id' => $theUser->id,
                    'type' => 'activity'
                ]);
            
        }
    }
}

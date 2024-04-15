<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function isAdmin(){
        if(auth()->user()->role->slug == 'admin'){
            return true;
        }

        return false;
    }

    public function findNotification($user_id, $notification_id){
        return SeenNotification::where('user_id', $user_id)->where('notification_id', $notification_id)->first();
    }

    public function Notifications(){
        return Notification::orderBy('created_at','desc')->where('type', 'notification')->
        whereBetween('created_at',[auth()->user()->created_at, Carbon::now()])->orderBy('created_at', 'desc')->paginate(5);
    }

    public function notSeenNotifications(){
        return SeenNotification::where('user_id', auth()->user()->id)->where('seen', 0)->where('type', 'notification')->
        whereBetween('created_at',[auth()->user()->created_at, Carbon::now()])->orderBy('created_at', 'desc')->paginate(5);
    }

    public function notSeenNotificationsCount(){
        return count(SeenNotification::where('user_id', auth()->user()->id)->where('seen', 0)->where('type', 'notification')->
        whereBetween('created_at',[auth()->user()->created_at, Carbon::now()])->get());
    }

    public function activityLog(){
        return Notification::orderBy('created_at','desc')->where('type', 'activity')->orderBy('created_at', 'desc')->
        whereBetween('created_at',[auth()->user()->created_at, Carbon::now()])->paginate(5);
    }

    public function notSeenActivity(){
        return SeenNotification::where('user_id', auth()->user()->id)->where('seen', 0)->where('type', 'activity')->
        whereBetween('created_at',[auth()->user()->created_at, Carbon::now()])->orderBy('created_at', 'desc')->paginate(5);
    }


    public function activityLogCount(){
        return count(SeenNotification::where('user_id', auth()->user()->id)->where('seen', 0)->where('type', 'activity')->
        whereBetween('created_at',[auth()->user()->created_at, Carbon::now()])->get());
    }
}

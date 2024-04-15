<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeenNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'notification_id',
        'user_id',
        'seen',
        'type'
    ];

    public function notification(){
        return $this->belongsTo(Notification::class);
    }
}

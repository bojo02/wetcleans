<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'date_time',
        'status_id'
    ];
    public function TicketServices(): HasMany{
        return $this->hasMany(TicketService::class, 'ticket_id');
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}

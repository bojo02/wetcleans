<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'service_id',
        'ticket_id'
    ];

    public function GetTicket(){
        return $this->belongsTo(Ticket::class);
    }
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
    public function service(){
        return $this->belongsTo(Service::class);
    }
}

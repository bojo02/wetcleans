<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FillForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $address;
    public $date_time;
    public $ticketServices;

    public $amount;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $phone, $address, $date_time, $ticketServices, $amount)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->date_time = $date_time;
        $this->ticketServices = $ticketServices;
        $this->amount = $amount;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Нова заявка за почистване от ' . $this->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.fill-form',
            with: [
                'name' => $this->name,
                'phone' => $this->phone,
                'address' => $this->address,
                'date_time' => $this->date_time,
                'services' => $this->ticketServices,
                'amount' => $this->amount,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

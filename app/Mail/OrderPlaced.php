<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        protected Order $order
    ) {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bestelling ontvangen',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.order-received',
            with: [
                'name' => $this->order->first_name . ' ' . $this->order->last_name,
                'email' => $this->order->email,
                'country' => $this->order->country,
                'city' => $this->order->city,
                'street' => $this->order->street,
                'house_number' => $this->order->house_number,
                'postal_code' => $this->order->postal_code,
                'company' => $this->order->company,
                'order_id' => $this->order->order_id,
                'paid_at' => $this->order->paid_at,
                'transaction_id' => $this->order->transaction_id,
                'payment_method' => $this->order->payment_method,
                'payment_status' => $this->order->payment_status,
            ],
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

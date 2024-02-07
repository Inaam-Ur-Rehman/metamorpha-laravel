<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(protected Contact $data,)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New message from the website',

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // dd($this->data);
        return new Content(
            html: 'mail.message',
            with: [
                'name' => $this->data->first_name . ' ' . $this->data->last_name,
                'email' => $this->data->email,
                'phone' => $this->data->phone,
                'mess' => $this->data->message,
                'company' => $this->data->company,
                'title' => $this->data->title,
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

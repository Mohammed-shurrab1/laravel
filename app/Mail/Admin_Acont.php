<?php

namespace App\Mail;

use App\Models\admin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Admin_Acont extends Mailable
{
    use Queueable, SerializesModels;
    public admin $data;
    // public admin $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(admin $data)
    {
        $this->data = $data;
    
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Admin_Acont',
            from: 'mohmaed@me.com',
            cc: 'mohmaed@com.ps'
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'email.Admin_Acont',

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}

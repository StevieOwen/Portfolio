<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    
    }

    public function build()
    {
        return $this->subject('New Portfolio Inquiry: ' . $this->data['subject'])
                    ->replyTo($this->data['email'], $this->data['name'])
                    ->html("
                        <h2>New Inquiry from Portfolio</h2>
                        <p><strong>Name:</strong> {$this->data['name']}</p>
                        <p><strong>Email:</strong> {$this->data['email']}</p>
                        <p><strong>Subject:</strong> {$this->data['subject']}</p>
                        <hr/>
                        <p><strong>Message:</strong></p>
                        <p>" . nl2br(e($this->data['message'])) . "</p>
                    ");
    }
}

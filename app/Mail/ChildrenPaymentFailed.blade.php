<?php

namespace App\Mail;

use App\Models\Children;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ChildrenPaymentFailed extends Mailable
{
    use Queueable, SerializesModels;

    public $children;

    /**
     * Create a new message instance.
     */
    public function __construct(Children $children)
    {
        $this->children = $children;
    }

    /**
     * Email subject
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Failed - Child Model Registration'
        );
    }

    /**
     * Email content
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.children-failed',
        );
    }

    /**
     * Attachments
     */
    public function attachments(): array
    {
        return [];
    }
}
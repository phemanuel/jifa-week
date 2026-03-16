<?php

namespace App\Mail;

use App\Models\Designer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DesignerPaymentFailed extends Mailable
{
    use Queueable, SerializesModels;

    public $designer;

    /**
     * Create a new message instance.
     */
    public function __construct(Designer $designer)
    {
        $this->designer = $designer;
    }

    /**
     * Email subject
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Failed - Designer Registration'
        );
    }

    /**
     * Email content
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.designer-failed',
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
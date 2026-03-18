<?php

namespace App\Mail;

use App\Models\Children;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class ChildrenPaymentSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $children;
    private $receiptNumber;

    public function __construct(Children $children)
    {
        $this->children = $children;
        $this->receiptNumber = $children->payment_reference;

        // Optional: store receipt number in model for template
        $this->children->receipt_number = $this->receiptNumber;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Successful - Child Model Registration',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.children-success',
        );
    }

    public function attachments(): array
    {
        $attachments = [];

        // Attach already generated receipt
        $receiptPath = public_path('receipts/'.$this->children->payment_reference.'.pdf');

        if (file_exists($receiptPath)) {
            $attachments[] = Attachment::fromPath($receiptPath)
                ->as('Child_Model_Receipt.pdf')
                ->withMime('application/pdf');
        }       

        return $attachments;
    }
}

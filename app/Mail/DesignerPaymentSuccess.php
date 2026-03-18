<?php

namespace App\Mail;

use App\Models\Designer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Barryvdh\DomPDF\Facade\Pdf; // DomPDF

class DesignerPaymentSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $designer;
    private $receiptNumber;

    public function __construct(Designer $designer)
    {
        $this->designer = $designer;
        $this->receiptNumber = $designer->payment_reference;

        // Optional: store receipt number in model for template
        $this->designer->receipt_number = $this->receiptNumber;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Successful - Designer Registration',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.designer-success',
        );
    }

    public function attachments(): array
    {
        $attachments = [];

        // Attach already generated receipt
        $receiptPath = public_path('receipts/'.$this->designer->payment_reference.'.pdf');

        if (file_exists($receiptPath)) {
            $attachments[] = Attachment::fromPath($receiptPath)
                ->as('Designer_Receipt.pdf')
                ->withMime('application/pdf');
        }

        // Attach static designer pack
        $designerPackPath = public_path('documents/Designer_pack.pdf');
        if (file_exists($designerPackPath)) {
            $attachments[] = Attachment::fromPath($designerPackPath)
                ->as('Designer_pack.pdf')
                ->withMime('application/pdf');
        }

        return $attachments;
    }
}
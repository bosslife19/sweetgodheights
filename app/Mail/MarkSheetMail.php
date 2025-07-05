<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MarkSheetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $student;
    public $pdf;

    /**
     * Create a new message instance.
     */
    public function __construct($pdf, $student)
    {
        $this->pdf = $pdf;
        $this->student = $student;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Your Mark Sheet')
                    ->view('emails.mark_sheet')
                    ->with(['student' => $this->student])
                    ->attachData($this->pdf->output(), 'marksheet.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}

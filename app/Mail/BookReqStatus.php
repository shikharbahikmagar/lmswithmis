<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookReqStatus extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($student_name, $student_email, $book_name, $status, $return_date)
    {
        $this->student_name = $student_name;
        $this->student_email = $student_email;
        $this->book_name = $book_name;
        $this->status = $status;
        $this->return_date = $return_date;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Book Request Status',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.book_request_status',
            with: [
                'status' => $this->status,
                'student_name' => $this->student_name,
                'student_email' => $this->student_email,
                'book_name' => $this->book_name,
                'return_date' => $this->return_date,
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

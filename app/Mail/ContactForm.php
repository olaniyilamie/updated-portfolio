<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    protected $message;
    protected $name;
    protected $mail_subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $mail_subject, $name)
    {
        $this->message = $message;
        $this->mail_subject = $mail_subject;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}

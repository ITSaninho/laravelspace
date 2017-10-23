<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    protected $email;
    protected $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $email, $msg)
    {
        $this->subject = $subject;
        $this->email = $email;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact-mail')
            ->with([
                'name' => $this->email,
                'email' => $this->email,
                'msg' => $this->msg,
            ])
            ->subject($this->subject);
    }
}

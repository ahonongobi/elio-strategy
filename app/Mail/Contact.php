<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $message;
    public $tel;
    public $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$tel,$message,$code)
    {
        $this->email = $email;
        $this->name = $name;
        $this->tel = $tel;
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')->subject('Contact de '.$this->name);
    }
}

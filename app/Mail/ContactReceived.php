<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $affair;
    /**
     * Create a new message instance.
    
     * @return void
     */
    public function __construct($contacto)
    {
        $this->email = $contacto['email'];
        $this->affair = $contacto['affair'];    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact_mail');
    }
}

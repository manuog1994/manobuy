<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserSendReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    /**
     * Create a new message instance.
    
     * @return void
     */
    public function __construct($input)
    {
        $this->name = $input['name'];
        $this->email = $input['email'];
        $this->phone = $input['phone'];    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('newusersend_mail');
    }
}

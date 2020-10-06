<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SetPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public function __construct($user)
    {
        //
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'npontu@gmail.com';
        $subject = 'Set Password';
        $name = 'Npontu E-Commerce.';

        return $this->view('admin.email.set_password')
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with([ 'message' => $this->user ]);
    }
}

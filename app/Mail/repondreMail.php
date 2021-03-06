<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class repondreMail extends Mailable
{
    use Queueable, SerializesModels;


    public $value;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($value)
    {
        //
        $this->value = $value;
    }
     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Message')->view('dashbord.mail.mail');
    }
}

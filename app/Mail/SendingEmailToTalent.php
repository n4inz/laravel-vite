<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendingEmailToTalent extends Mailable
{
    use Queueable, SerializesModels;
    protected $template;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template)
    {
        $this->template = $template;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from Ayiconnection.com')->view('email.jobboards.sendEmailToTalent', [
            'tmp' => $this->template
        ]);
    }
}

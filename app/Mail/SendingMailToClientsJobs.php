<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendingMailToClientsJobs extends Mailable
{
    use Queueable, SerializesModels;
    protected $match_talent;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($match_talent)
    {
        $this->match_talent = $match_talent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from agency.com')->view('email.jobboards.sendEmailToClient',[
            'value' => $this->match_talent
        ]);
    }
}

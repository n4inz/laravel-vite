<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendingMailToClientsJobs extends Mailable
{
    use Queueable, SerializesModels;
    protected $match_talent;
    protected $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$match_talent)
    {
        $this->match_talent = $match_talent;
        $this->name = $name;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject('Mail from agency.com')->view('email.jobboards.sendEmailToClient',[
        //     'value' => $this->match_talent
        // ]);
        return $this->subject('Mail from agency.com')->view('email.jobboards.talentRekomendation',[
            'value' => $this->match_talent,
            'client' => $this->name
        ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendingEmailDescriptionToTalent extends Mailable
{
    use Queueable, SerializesModels;

    protected $result;
    protected $talentNeed;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($result, $talentNeed)
    {
        $this->result = $result;
        $this->talentNeed = $talentNeed;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

         
        return $this->subject('Mail from agency.com')->view('email.jobboards.sendJobDescription',[
            'result' => $this->result,
            'talentNeed' => $this->talentNeed
        ]);
    }
}

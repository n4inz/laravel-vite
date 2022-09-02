<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendingEmailToTalent extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    protected $template;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $template)
    {
        $this->template = $template;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('email.jobboards.sendEmailToTalent', [
            'tmp' => $this->template
        ]);
    }
}

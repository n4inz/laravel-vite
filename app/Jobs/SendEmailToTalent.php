<?php

namespace App\Jobs;

use App\Mail\SendingEmailToTalent;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailToTalent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $email;
    protected $template;
    protected $subject;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $subject, $template)
    {
        $this->email = $email;
        $this->template = $template;
        $this->subject = $subject;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new SendingEmailToTalent($this->subject  ,$this->template));
    }
}

<?php

namespace App\Jobs;

use App\Mail\SendingMailToClientsJobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $email;
    protected $match_talent;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $match_talent)
    {
        $this->email = $email;
        $this->match_talent = $match_talent;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // return $this->email;
        
        Mail::to($this->email)->send(new SendingMailToClientsJobs($this->match_talent));
    }
}

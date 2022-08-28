<?php

namespace App\Jobs;

use App\Mail\sendingEmailDescriptionToTalent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendJobDescriptionToTalent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $email;
    protected $result;
    protected $talentNeed;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $result, $talentNeed)
    {
        $this->email = $email;
        $this->result = $result;
        $this->talentNeed = $talentNeed;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        Mail::to($this->email)->send(new sendingEmailDescriptionToTalent($this->result, $this->talentNeed));
    }
}

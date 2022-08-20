<?php

namespace Database\Seeders;

use App\Models\TemplateEmail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'body' => '<p>Dear [<em>Candidate_name</em>],</p><p>Thank you for taking the time to consider [<em>Company_name</em>]. We wanted to let you know that we have chosen to move forward with a different candidate for the [<em>Job_title</em>] position.</p><p>[<em>Optionally, include feedback from the hiring process for candidates who may be suitable for future openings:</em>] Our team was impressed by your skills and accomplishments. [<em>It&rsquo;s best to include</em></p><p><em>something that specifically drew your attention.</em>] We think you could be a good fit for other future openings and will reach out again if we find a good match. We wish you all the best in your job search and future professional endeavors.</p><p>Regards,</p><p>[<em>Your name</em>]</p>',
                'type' => '1',
                'status' => 'REJECTED'
            ],
            [
                'body' => '<p>Hi [name],</p><p>Thanks for your application to [company name]. We were impressed by your background and would like to invite you to interview [at our office / via Skype / via phone] to tell you a little more about the position and get to know you better. [Details about the interview, including anything specific you would like candidates to know about.]</p><p>Please let me know which of the following times work for you, and I can send over a confirmation and details:&nbsp;</p><p><a href="https://calendly.com/n4inz/job-id-2">calendly</a></p><p>Looking forward to meeting you,</p><p>[Your name]</p>',
                'type' => '2',
                'status' => 'INTERVIEW'
            ],
            // [
            //     'body' => '<p><em>Hello [Candidate Name],</em></p><p>&nbsp;</p><p><em>Thank you for expressing interest in [Company] and the [Job Title] position you applied for. While we were impressed with your qualifications, unfortunately, we&rsquo;ve decided to move forward with other applicants whose skills and experience better meet our needs at this time.</em></p><p>&nbsp;</p><p><em>We sincerely appreciate your interest in [Company] and hope that you&rsquo;ll stay in touch. Please don&rsquo;t hesitate to reach out if we have another open role that interests you.</em></p><p>&nbsp;</p><p><em>To stay up to date on current job openings and ensure you&rsquo;re included in our search for future great candidates, we encourage you to join our talent community and connect with us here: &lt;Link to Talent&nbsp;</em></p><p>&nbsp;</p><p><em>Pipeline Nurture Page&gt;.</em></p><p><em>Best wishes,</em></p><p><em>&lt;Sender Name&gt;</em></p>',
            //     'type' => '3',
            //     'status' => 'REJECTED'
            // ],
        ];

        TemplateEmail::insert($array);
    }
}

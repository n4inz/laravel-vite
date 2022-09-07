<?php

namespace Database\Seeders;

use App\Models\EmailAgencyTemplate;
use App\Models\TemplateEmail;
use App\Models\User;
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
                'body' => '<p>Hi [Family First Name],<br />Thank you for your time to chat with me earlier. We have gathered a list of requirements and your family information in the link below.<br />Please confirm and let me know if there is anything else especially the must haves in the job.<br />If you have any questions, please let me know. [insert link] - please review:</p><ul><li>family info</li><li>notes</li><li>our process (additional documents)</li></ul><p>If you don&#39;t have any questions and would like to proceed with us, please review the agreement and sign where indicated. We also included the invoice for payment.<br />Once received, we will get the process started. Thanks,<br />Agency name team</p>',
                'type' => '0',
                'status' => 'CLIENT CONFIRMATION'
            ],
            [
                'body' => 'Email internal matched dummy',
                'type' => 'internal_matched',
                'status' => 'INTERNAL MATCHED'
            ],
            [
                'body' => '<p>Hi [Helper fn],<br />Thank you for your application! We would like to schedule a quick interview with you to learn more about you and tell you about the position.<br />Please select the time that fits you the best.Thanks,<br />Agency name team</p>',
                'type' => 'agency_interview',
                'status' => 'AGENCY INTERVIEW'
            ],
            [
                'body' => '<p>Hi [Family First Name],<br />We are able to finalize two caregivers who meet your requirements with years of experience. Please use the link below to view their info.Please note:</p><ul><li>We can hold them for<strong>&nbsp;48 hours</strong>&nbsp;without interviewing other families.</li><li>We recommend our families not to share with them that you are interviewing with other candidates.</li><li>Here are some topics we highly recommend discussing during the interview: rate, job responsibilities, specific schedule, paid vacation, payment frequency, payment method, and working style/philosophy preferences, etc. It doesn&#39;t have to be this order, just a guide.</li></ul><p><strong>Action required from you:&nbsp;</strong><br />We would like to coordinate interviews rather soon given the fast hire market. Please provide your available time/date within the portal to schedule your interviews.<br />Thanks,<br />Agency name team (edited)</p>',
                'type' => 'present_to_family',
                'status' => 'PRESENT TO FAMILY'
            ],
            [
                'body' => '<p>Hi [family first name]/[helper first name]<br />Your interview is set up at this time. Please make sure you&#39;re on time and call via xx. Feel free to send a text to greet each other. If you need to reschedule it, please let each other know ahead of time.<br />Thanks,</p>',
                'type' => 'family_interview',
                'status' => 'FAMILY INTERVIEW'
            ],
            [
                'body' => '<p>Hi [family first name]/[helper first name]<br />Your trial is set up at this time. Please make sure you&#39;re on time and meet at this time at this address.<br />If you need to reschedule it, please let each other know ahead of time.<br />Thanks,</p>',
                'type' => 'family_trialing',
                'status' => 'FAMILY TRIALLING'
            ],
            [
                'body' => '<p>Hi [helper first name]<br />Thank you very much for your application.<br />Unfortunate, the family doesn&#39;t think this is a good fit due to the following reason: xxx<br />We will keep an eye out for another position. Please also keep us updated with your availability. Thanks,</p>',
                'type' => 'rejected',
                'status' => 'REJECTAD'
            ],
            [
                'body' => '<p>Hi [family fn],<br />Unfortunately this helper withdrawn due to the following reason: xxx<br />We will keep searching for another candidat</p>',
                'type' => 'withdrawn',
                'status' => 'WITHDRAWN'
            ],
            [
                'body' => '<p>Hi [family first name]/[helper first name]<br />Congratulations to you both for finalizing the relationship. If you haven&#39;t done so already, please make sure you specify the scope of work, terms, schedule and any other details.Please feel free to coordinate directly from here onwards. Let us know if you have any other questions.<br />Thanks,&nbsp;</p>',
                'type' => 'family_offer',
                'status' => 'FAMILY OFFER'
            ],
            // FEEDBACK
            [
                'body' => '<p>Hi [Family FN],<br />How was your interview?<br />Please provide us some feedback and whether you would like to move to the next step with this helper. Thanks.<br />Agency name team<br />&nbsp;</p>',
                'type' => '8',
                'status' => 'FAMILY INTERVIEW FEEDBACK'
            ],
            [
                'body' => '<p>Hi [Helper FN],<br /><br />How was your interview?<br />Please provide us some feedback and we will follow up with the family.<br />Thanks.<br /><br />Agency name team</p>',
                'type' => '9',
                'status' => 'TALENT INTERVIEW FEEDBACK'
            ],
            [
                'body' => '<p>Hi [Family FN],<br />How was your trial? Please provide us some feedback and whether you would like to move to the next step with this helper.<br />Thanks.<br />&nbsp;</p>',
                'type' => '10',
                'status' => 'FAMILY TRIALLING FEEDBACK'
            ],
            [
                'body' => '<p>Hi [Helper FN],<br />How was your trial? Please provide us some feedback and we will follow up with the family. Thanks.<br />Agency name team</p>',
                'type' => '11',
                'status' => 'TALENT FAMILY TRIALLING FEEDBACK'
            ],

            // [
            //     'body' => '<p><em>Hello [Candidate Name],</em></p><p>&nbsp;</p><p><em>Thank you for expressing interest in [Company] and the [Job Title] position you applied for. While we were impressed with your qualifications, unfortunately, we&rsquo;ve decided to move forward with other applicants whose skills and experience better meet our needs at this time.</em></p><p>&nbsp;</p><p><em>We sincerely appreciate your interest in [Company] and hope that you&rsquo;ll stay in touch. Please don&rsquo;t hesitate to reach out if we have another open role that interests you.</em></p><p>&nbsp;</p><p><em>To stay up to date on current job openings and ensure you&rsquo;re included in our search for future great candidates, we encourage you to join our talent community and connect with us here: &lt;Link to Talent&nbsp;</em></p><p>&nbsp;</p><p><em>Pipeline Nurture Page&gt;.</em></p><p><em>Best wishes,</em></p><p><em>&lt;Sender Name&gt;</em></p>',
            //     'type' => '3',
            //     'status' => 'REJECTED'
            // ],
        ];

        TemplateEmail::insert($array);
        User::query()->get()->map(function($user){
            $array = [
                [
                    'body' => '<p>Hi [Family First Name],<br />Thank you for your time to chat with me earlier. We have gathered a list of requirements and your family information in the link below.<br />Please confirm and let me know if there is anything else especially the must haves in the job.<br />If you have any questions, please let me know. [insert link] - please review:</p><ul><li>family info</li><li>notes</li><li>our process (additional documents)</li></ul><p>If you don&#39;t have any questions and would like to proceed with us, please review the agreement and sign where indicated. We also included the invoice for payment.<br />Once received, we will get the process started. Thanks,<br />Agency name team</p>',
                    'type' => '0',
                    'status' => 'CLIENT CONFIRMATION',
                    'users_id' => $user->id
                ],
                [
                    'body' => 'Email internal matched dummy',
                    'type' => 'internal_matched',
                    'status' => 'INTERNAL MATCHED',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [Helper fn],<br />Thank you for your application! We would like to schedule a quick interview with you to learn more about you and tell you about the position.<br />Please select the time that fits you the best.Thanks,<br />Agency name team</p>',
                    'type' => 'agency_interview',
                    'status' => 'AGENCY INTERVIEW',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [Family First Name],<br />We are able to finalize two caregivers who meet your requirements with years of experience. Please use the link below to view their info.Please note:</p><ul><li>We can hold them for<strong>&nbsp;48 hours</strong>&nbsp;without interviewing other families.</li><li>We recommend our families not to share with them that you are interviewing with other candidates.</li><li>Here are some topics we highly recommend discussing during the interview: rate, job responsibilities, specific schedule, paid vacation, payment frequency, payment method, and working style/philosophy preferences, etc. It doesn&#39;t have to be this order, just a guide.</li></ul><p><strong>Action required from you:&nbsp;</strong><br />We would like to coordinate interviews rather soon given the fast hire market. Please provide your available time/date within the portal to schedule your interviews.<br />Thanks,<br />Agency name team (edited)</p>',
                    'type' => 'present_to_family',
                    'status' => 'PRESENT TO FAMILY',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [family first name]/[helper first name]<br />Your interview is set up at this time. Please make sure you&#39;re on time and call via xx. Feel free to send a text to greet each other. If you need to reschedule it, please let each other know ahead of time.<br />Thanks,</p>',
                    'type' => 'family_interview',
                    'status' => 'FAMILY INTERVIEW',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [family first name]/[helper first name]<br />Your trial is set up at this time. Please make sure you&#39;re on time and meet at this time at this address.<br />If you need to reschedule it, please let each other know ahead of time.<br />Thanks,</p>',
                    'type' => 'family_trialing',
                    'status' => 'FAMILY TRIALLING',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [helper first name]<br />Thank you very much for your application.<br />Unfortunate, the family doesn&#39;t think this is a good fit due to the following reason: xxx<br />We will keep an eye out for another position. Please also keep us updated with your availability. Thanks,</p>',
                    'type' => 'rejected',
                    'status' => 'REJECTAD',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [family fn],<br />Unfortunately this helper withdrawn due to the following reason: xxx<br />We will keep searching for another candidat</p>',
                    'type' => 'withdrawn',
                    'status' => 'WITHDRAWN',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [family first name]/[helper first name]<br />Congratulations to you both for finalizing the relationship. If you haven&#39;t done so already, please make sure you specify the scope of work, terms, schedule and any other details.Please feel free to coordinate directly from here onwards. Let us know if you have any other questions.<br />Thanks,&nbsp;</p>',
                    'type' => 'family_offer',
                    'status' => 'FAMILY OFFER',
                    'users_id' => $user->id
                ],
                // FEEDBACK
                [
                    'body' => '<p>Hi [Family FN],<br />How was your interview?<br />Please provide us some feedback and whether you would like to move to the next step with this helper. Thanks.<br />Agency name team<br />&nbsp;</p>',
                    'type' => '8',
                    'status' => 'FAMILY INTERVIEW FEEDBACK',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [Helper FN],<br /><br />How was your interview?<br />Please provide us some feedback and we will follow up with the family.<br />Thanks.<br /><br />Agency name team</p>',
                    'type' => '9',
                    'status' => 'TALENT INTERVIEW FEEDBACK',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [Family FN],<br />How was your trial? Please provide us some feedback and whether you would like to move to the next step with this helper.<br />Thanks.<br />&nbsp;</p>',
                    'type' => '10',
                    'status' => 'FAMILY TRIALLING FEEDBACK',
                    'users_id' => $user->id
                ],
                [
                    'body' => '<p>Hi [Helper FN],<br />How was your trial? Please provide us some feedback and we will follow up with the family. Thanks.<br />Agency name team</p>',
                    'type' => '11',
                    'status' => 'TALENT FAMILY TRIALLING FEEDBACK',
                    'users_id' => $user->id
                ],
            ];
            EmailAgencyTemplate::insert($array);
        });

        
    }
}

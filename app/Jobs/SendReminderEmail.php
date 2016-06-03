<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Reminder;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;

class SendReminderEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    private $reminder;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Reminder $reminder)
    {
        $this->reminder = $reminder;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('test', ['reminder' => $this->reminder], function ($m) {
            $m->from('german.breus@gmail.com');
            $m->to($this->reminder->email);
            $m->subject("A gentle reminder...");
        });
    }

    public function failed()
    {
        // Called when the job is failing...
    }

}

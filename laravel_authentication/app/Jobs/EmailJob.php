<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

     public $to_email;
    public function __construct($to_email)
    {
        $this->to_email = $to_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emailData = [
            'subject' => 'welcome to rudra',
            'body' => 'welcome to rudra. this is test email sent using laravel mailer'
        ];
        Mail::to($this->to_email)->send(new WelcomeEmail($emailData));
    }
}

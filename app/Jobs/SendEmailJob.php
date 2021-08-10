<?php

namespace App\Jobs;

use App\Mail\Mailtrap;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $details = [
            'title' => 'Thank you for subscribing to my newsletter',
            'body'  => 'You will receice a reminder every Fourth Friday of the month'
        ];

        //$users = User::select('email')->get();
        Mail::to('luthfi_azzammi@hotmail.com')->send(new Mailtrap($details));
        //Mail::send('emails.mailtrap')
    }
}

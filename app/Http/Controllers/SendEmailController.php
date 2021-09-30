<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\Mailtrap;
use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class SendEmailController extends Controller
{
    public function sendEmail(){
        $user = auth()->user();
        //Notification::send($user, new VerifyEmailNotification($user));

        SendEmailJob::dispatch()->delay(now()->addMinute());

        return redirect(RouteServiceProvider::HOME);
    }
}

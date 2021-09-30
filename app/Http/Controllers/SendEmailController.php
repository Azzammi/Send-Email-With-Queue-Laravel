<?php

namespace App\Http\Controllers;

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
        $details = [
            'title' => 'Thank you for subscribing to my newsletter',
            'body'  => 'You will receice a reminder every Fourth Friday of the month'
        ];

        //$users = User::select('email')->get();
        Mail::to('luthfi_azzammi@hotmail.com')->send(new Mailtrap($details));

        return redirect(RouteServiceProvider::HOME);
    }
}

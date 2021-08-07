<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class SendEmailController extends Controller
{
    public function sendEmail(){
        $user = auth()->user();
        Notification::send($user, new VerifyEmailNotification($user));

        return redirect(RouteServiceProvider::HOME);
    }
}

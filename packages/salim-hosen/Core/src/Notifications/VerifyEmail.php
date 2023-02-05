<?php

namespace SalimHosen\Core\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Notifications\VerifyEmail as Notification;
use Illuminate\Support\Facades\URL;

class VerifyEmail extends Notification implements ShouldQueue
{
    use Queueable;

    protected function verificationUrl($notifiable)
    {

        $url = URL::temporarySignedRoute(
            "api.verification.verify",
            Carbon::now()->addMinutes(60),
            ['user' => $notifiable->id]
        );

        return str_replace(url('/api/v1'), config('app.url'), $url);
    }

}

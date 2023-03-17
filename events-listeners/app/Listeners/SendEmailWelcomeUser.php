<?php

namespace App\Listeners;

use App\Events\WelcomeUser;
use App\Mail\WelcomeUser as MailWelcomeUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailWelcomeUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WelcomeUser $event): void
    {
        Mail::to($event->user->email)->send(new MailWelcomeUser($event->user));
    }
}

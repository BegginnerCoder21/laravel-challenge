<?php

namespace App\Providers;

use App\Providers\RegisteredMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\UserCreatingMailNotification;

class UserCreatingMailNotificationListener
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
    public function handle(RegisteredMail $event): void
    {
        $post = ['title' => 'super title'];

        $event->user->notify(new UserCreatingMailNotification($post));
    }
}

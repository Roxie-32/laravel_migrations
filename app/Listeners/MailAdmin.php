<?php

namespace App\Listeners;

use App\Events\MigrationsEnded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MailAdmin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\MigrationsEnded  $event
     * @return void
     */
    public function handle(MigrationsEnded $event)
    {
        // Logic to send a mail to the admin after migration has finished executing.
    }
}

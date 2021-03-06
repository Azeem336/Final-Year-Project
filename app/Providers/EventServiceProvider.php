<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    
 protected $listen = [
        'App\Events\ChatEvent' => [
            'App\Listeners\ChatListener',
        ],
    ];

    public function boot()
    {
        parent::boot();

        //
    }
}

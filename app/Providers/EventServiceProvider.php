<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use SocialiteProviders\Manager\SocialiteWasCalled;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // ... other providers
            'SocialiteProviders\\Google\\GoogleExtendSocialite@handle',
        ],
    ];
    
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $user = User::class;
        event(new Registered($user));
    }
}

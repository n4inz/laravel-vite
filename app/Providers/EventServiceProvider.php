<?php

namespace App\Providers;

use App\Events\Actifity;
use App\Events\Nofication;
use App\Listeners\ActifityListener;
use App\Listeners\NotificationListener;
use App\Listeners\PaidInvoiceListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // 'stripe-webhooks::invoice.paid' => [
        //     PaidInvoiceListener::class,
        // ],
    ];



    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(
            Actifity::class,
            [ActifityListener::class, 'handle']
        );

        // Event::listen(function (Nofication $event) {
        //     [NotificationListener::class, 'create'];
        // });

        Event::listen(
            Nofication::class,
            [NotificationListener::class, 'create']
        );

    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}

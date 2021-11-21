<?php

namespace App\Listeners;

use App\Models\Admin;
use App\Models\Merchant;
use App\Notifications\NewMerchantNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendNewMerchantNotification
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
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        $merchant = $event->merchant;
        $notification = new NewMerchantNotification($merchant);
        $admin = Admin::where('id', 1)->get();
        Notification::send($admin, $notification);
    }


}

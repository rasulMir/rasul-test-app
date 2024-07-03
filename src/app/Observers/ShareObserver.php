<?php

namespace App\Observers;

use App\Models\Client;
use App\Models\Share;
use App\Notifications\SendSharesToClient;
use Illuminate\Support\Facades\Notification;

class ShareObserver
{
    /**
     * Handle the Share "created" event.
     */
    public function created(Share $share): void
    {
        $clients = Client::all();

        Notification::send($clients, new SendSharesToClient($share));
    }
}

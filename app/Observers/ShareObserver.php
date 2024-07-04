<?php

namespace App\Observers;

use App\Mail\SendSharesMail;
use App\Models\Client;
use App\Models\Share;
use Illuminate\Support\Facades\Mail;

class ShareObserver
{
    /**
     * Handle the Share "created" event.
     */
    public function created(Share $share): void
    {
        $clients = Client::all();

        Mail::to($clients)->queue(new SendSharesMail($share));
    }
}

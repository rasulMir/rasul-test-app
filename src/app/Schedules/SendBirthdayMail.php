<?php

namespace App\Schedules;

use App\Models\Client;
use App\Notifications\SendBirthdayMail as NotificationsSendBirthdayMail;

class SendBirthdayMail
{
    public function __invoke()
    {
        $clients = Client::all();
        $date = now();

        foreach ($clients as $client) {
            if ($date->month === $client->birth_date->month && $date->day === $client->birth_date->day) {
                $client->notify(new NotificationsSendBirthdayMail());
            }
        }
    }
}
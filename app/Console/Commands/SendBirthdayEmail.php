<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Notifications\SendBirthdayMail;
use Illuminate\Console\Command;

class SendBirthdayEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clients:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $clients = Client::all();
        $date = now();

        foreach ($clients as $client) {
            if ($date->month === $client->birth_date->month && $date->day === $client->birth_date->day) {
                $client->notify(new SendBirthdayMail());
            }
        }
    }
}

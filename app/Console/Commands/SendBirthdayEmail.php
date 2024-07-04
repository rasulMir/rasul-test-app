<?php

namespace App\Console\Commands;

use App\Mail\SendBirthdayMail;
use App\Models\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

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
                Mail::to($client->email)->queue(new SendBirthdayMail($client));
            }
        }
    }
}

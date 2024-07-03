<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Models\Share;
use App\Notifications\SendBirthdayMail;
use App\Notifications\SendSharesToClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class SendShares extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shares:send';

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
        $yesterday = now()->yesterday();
        $shares = Share::where('created_at', '<=', $yesterday)->get();
        $clients = Client::all();

        foreach ($shares as $share) {
            Notification::send($clients, new SendSharesToClient($share));            
        }
    }
}

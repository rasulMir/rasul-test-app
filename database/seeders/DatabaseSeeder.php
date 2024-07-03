<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Share;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('clients')->truncate();
        // DB::table('shares')->truncate();

        Share::factory(20)->create();
        Client::factory(30)->create();
    }
}

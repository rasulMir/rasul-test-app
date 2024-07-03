<?php

use App\Http\Controllers\ClientController;
use App\Models\Client;
use App\Models\Share;
use App\Notifications\SendBirthdayMail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $client = Client::find(1);
//     $client->notify(new SendBirthdayMail());

//     Share::factory(1)->create();
// });
Route::get('/', [ClientController::class, 'index'])
    ->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])
    ->name('clients.create');
Route::post('/clients/store', [ClientController::class, 'store'])
    ->name('clients.store');
Route::delete('/clients/{client}/delete', [ClientController::class, 'delete'])
    ->name('clients.delete');
Route::get('/clients/{client}', [ClientController::class, 'edit'])
    ->name('clients.edit');
Route::patch('/clients/{client}/update', [ClientController::class, 'update'])
    ->name('clients.update');

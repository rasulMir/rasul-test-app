<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ShareController;
use App\Models\Client;
use App\Models\Share;
use App\Notifications\SendBirthdayMail;
use App\Notifications\SendSharesToClient;
use Illuminate\Support\Facades\Route;

// shares
Route::get('/shares/create', [ShareController::class, 'create'])
    ->name('shares.create');
Route::post('/shares/store', [ShareController::class, 'store'])
    ->name('shares.store');
Route::get('/shares', [ShareController::class, 'index'])
    ->name('shares.index');
// shares

// clients
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
// clients
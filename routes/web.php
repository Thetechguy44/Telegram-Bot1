<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [TelegramController::class, 'showLoginPage'])->name('login');
// Route::post('/webhook', [TelegramController::class, 'webhook']);
// Route::get('/callback', [TelegramController::class, 'handleLogin'])->name('telegram.callback');

Route::get('/', [TelegramController::class, 'index']);
Route::post('/telegram/save-user', [TelegramController::class, 'saveUser']);
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

// this helps when you rename controller the change hit web.php and rename to the new
Route::get('/', WelcomeController::class);

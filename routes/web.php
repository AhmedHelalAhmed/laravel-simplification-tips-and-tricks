<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeLaraconController;

// this helps when you rename controller the change hit web.php and rename to the new
Route::get('/', WelcomeLaraconController::class);

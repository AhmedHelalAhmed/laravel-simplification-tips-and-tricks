<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

// this helps when you rename controller the change hit web.php and rename to the new
// fully qualified class name and remove default namespace from route provider
Route::get('/', WelcomeController::class);

<?php

namespace App\Http\Controllers;

class WelcomeController
{
    // if you need and trait from Controller
    // you can use this here like
    // use AuthorizesRequests;
    // and use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    public function __invoke()
    {
        return view('welcome');
    }
}

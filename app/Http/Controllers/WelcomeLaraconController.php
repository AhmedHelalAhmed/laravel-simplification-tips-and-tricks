<?php

namespace App\Http\Controllers;

class WelcomeLaraconController
{
    // if you need and trait from Controller
    // you casn use this here like
    // use AuthorizesRequests;
    // and use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    public function __invoke()
    {
        return view('welcome');
    }
}

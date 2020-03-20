<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    protected $guarded = [];

    public function wel()
    {
        return view('welcome');
    }
}

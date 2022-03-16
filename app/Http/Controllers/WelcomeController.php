<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() 
    {
        $welcome = 'Добро пожаловать!';
        return view('welcome.index', [
            'welcome' => $welcome
        ]);
    }
}

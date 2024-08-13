<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginPage(): \Illuminate\Contracts\View\View
    {
        return view('login');
    }

    public function registerPage():\Illuminate\Contracts\View\View
    {
        return view('register');
    }
}

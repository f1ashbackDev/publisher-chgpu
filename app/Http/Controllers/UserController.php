<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {

    }
    public function loginPage(): \Illuminate\Contracts\View\View
    {
        $test = $this->userService->getUser(1);
        dd($test);
//        return view('login');
    }

    public function registerPage():\Illuminate\Contracts\View\View
    {
        return view('register');
    }
}

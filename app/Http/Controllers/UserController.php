<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Depart;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {

    }
    public function loginPage(): \Illuminate\Contracts\View\View
    {
        return view('frontend.login');
    }

    public function registerPage():\Illuminate\Contracts\View\View
    {
        return view('frontend.register', [
            'departs' => Depart::all()
        ]);
    }

    public function register(Request $request)
    {
        $created = $this->userService->createUser($request->all());
        Auth::login($created);
        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        $logined = $this->userService->loginUser($request->all());
        dd($logined);
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}

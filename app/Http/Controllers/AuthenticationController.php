<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthenticationService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthenticationController extends Controller
{   
    private AuthenticationService $authService;

    public function __construct() 
    {
        $this->authService = new AuthenticationService();
    }

    public function register(Request $request): View {
        return view('auth.register');
    }

    public function create(Request $request): RedirectResponse 
    {
        $request->validate([
            'name' => 'required|string|min:5|max:20',
            'email' => 'required|email',
            'password' => 'required|min:5|max:25'
        ]);

        $request->session()->flash("success", "You are registered, now login");

       return $this->authService->insert($request);
    }

    public function verify(Request $request): View {
        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse 
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $request->session()->put("name", md5($request->name, true));

        if (!$request->session()->has("name")) {
            return redirect("/login", 303);
        }
        
        $request->session()->flash("success", "You are logged in, explore our website now");

        return $this->authService->selectEmail($request);
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->regenerate();
        $request->session()->regenerateToken();

        \Auth::logout();

        return redirect("/login", 303);
    }
}

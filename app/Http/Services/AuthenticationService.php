<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthenticationService 
{
    public function insert(Request $request): RedirectResponse
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/login', 303);
    }

    public function selectEmail(Request $request): RedirectResponse
    {
        if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/login', 303);
        }

        return redirect('/', 303);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, these credentials do not match'
            ]);
        }

        $request->session()->regenerate();

        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Auth::logout();

        return redirect('/login');
    }
}

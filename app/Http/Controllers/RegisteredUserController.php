<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate
        $validatedAttributes = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        // create the user
        $user = User::create($validatedAttributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show sign up form
    public function create()
    {
        return view('users.register');
    }

    // Create new users
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);
        //  Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = User::create($formFields);

        //logIn
        auth()->login($user);

        return redirect('/')->with('message', 'User created and Loged in');
    }

    //Log user out
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout successful');
    }

    //Show log in form
    public function login()
    {
        return view('users.login');
    }


    // Sign user in
    public function signin(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now Loged in');
        }

        return back()->withErrors(['email' => 'Invalid email or password'])->onlyInput('email');
    }
}

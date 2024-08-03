<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show sign up form
    public function create(){
        return view('users.register');
    }
    // Create new users
    public function store(Request $request){
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
}

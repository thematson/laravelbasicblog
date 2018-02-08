<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    public function store()
    {
        //validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email'=> 'required|email',
            'password' => 'required|confirmed'
        ]);
        //create and save user
        $user = User::create(request(['name', 'email', 'password']));
        //sign user in
        auth()->login($user);
        //redirect to page
        return redirect()->home();

    }

}

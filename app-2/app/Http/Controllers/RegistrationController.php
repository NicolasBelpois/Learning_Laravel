<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validation du formulaire

        $this->validate(request(), [

              'name' => 'required',

              'email' => 'required|email',

              'password' => 'required'

        ]);

        //Enregistrer un nouvel utilisateur

        $user = User::create(request(['name', 'email', 'password']));

        //Connecter l'utilisateur

        auth()->login($user);

        //Redirection vers la homepage

        return redirect()->home();
    }
}

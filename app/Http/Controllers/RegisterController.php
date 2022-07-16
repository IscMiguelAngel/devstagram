<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [ //reglas de validación
            "name" => "required|max:30",
            "username" => "unique:users|required|min:5|max:10",
            "email" => "unique:users|required|email",
            "password" => "required",
            "password_confirm" => "required"
        ]);
    }
}
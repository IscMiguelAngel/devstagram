<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {


        //Modificción de $request para validación de username
        $request->request->add(["username" => Str::slug($request->username)]);

        $this->validate($request, [ //reglas de validación
            "name" => "required|max:30",
            "username" => "required|unique:users|min:5|max:10",
            "email" => "required|unique:users|email",
            "password" => "required|confirmed"
        ]);

        User::create([ //insertar en tabla usuarios
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
    }
}
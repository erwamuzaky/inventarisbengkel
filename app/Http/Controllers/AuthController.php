<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $username = $request->username;
        $password = $request->password;

        if(
            $username == 'erwa'
            &&
            $password == '123'
        ){

            session([
                'login' => true
            ]);

            return redirect('/dashboard');

        }

        return back()->with(
            'error',
            'Username atau Password Salah'
        );

    }
}
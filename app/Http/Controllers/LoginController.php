<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $title = "Авторизация";
        return view('enterviews.login',
        [
            'title' => $title
        ]);
    }

    public function register()
    {
        return view('enterviews.register');
    }


    public function authorizeHandler(Request $request)
    {
        //TODO: authorize user here
        /*
         * user model: firstname, lastname, age, work expirience
         * id, login, password, role
         */
        dd($request->all());
    }
}

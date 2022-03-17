<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $title = "Авторизация";
        return view('enterviews.login', ['title' => $title,]);
    }

    public function register()
    {
        $title = "Регистрация";
        return view('enterviews.register', ['title' => $title]);
    }


    public function authorizeHandler(Request $request)
    {
        $user = User::where('login', '=', $request->get('login'))->first();
        if($user == null){
            return redirect()->back()->withErrors("Неправильный логин или пароль")
                ->withInput();
        }

        if($user->password != md5($request->password)){
            return redirect()->back()->withErrors("Неправильный логин или пароль")
                ->withInput();
        }

        Auth::login($user);
        return redirect(route('main_page'));
    }

    public function registerHandler(Request $request)
    {
        $validatedFields = Validator::make($request->all(), [
            '*' => 'required',
            'email' => 'email',
            'exp' => 'integer'
        ]);

        if ($validatedFields->fails()) {
            return redirect()->back()->withErrors($validatedFields)
                ->withInput();
        }

        $isUserExists = User::where('email', '=', $request->email)->get();

        if(count($isUserExists) > 0){
            return redirect()->back()->withErrors("User already exists")
                ->withInput();
        }
        if($request->get('password') != $request->get('confpass')){
            return redirect()->back()->withErrors('Passwords are different');
        }

        $userdata = $validatedFields->validated();
        $userdata['bdate'] = $lastupdated = date('Y-m-d H:i:s');
        $userdata['password'] = md5($userdata['password']);
        $user = User::create($userdata);


        return redirect()->back()->with('success', 'Registered!');
    }

}

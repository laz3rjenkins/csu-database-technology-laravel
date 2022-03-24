<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Faker\Generator;

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
        $userdata['bdate'] = date('Y-m-d H:i:s');
        $userdata['password'] = md5($userdata['password']);
        $user = User::create($userdata);


        return redirect()->back()->with('success', 'Registered!');
    }

    public function Logout(){
        Auth::logout();
    }

    public function FakeUsers(){
        //$.post('/fake_users', data , function(res){console.log(res);})
        /*
         var data = {_token: "AekDKMUXvYIbR1W8sRK0pXmlLu4a6bWFIIm6qBem"}
         */
        $faker = Factory::create();
        for ($i = 0; $i < 15; $i++){
            $userdata = [];
            $first_name = $faker->firstName;
            $last_name = $faker->lastName;
            $login = $first_name . "_" . $last_name;
            $userdata['exp'] = rand(2, 50);
            $userdata['login'] = $login;
            $userdata['first_name'] = $first_name;
            $userdata['email'] = $faker->email;
            $userdata['last_name'] = $last_name;
            $userdata['bdate'] = $faker->date;
            $userdata['password'] = md5($faker->password);
            $users = User::create([
                'login' => $userdata['login'],
                'first_name' => $userdata['first_name'],
                'email' => $userdata['email'],
                'last_name' => $userdata['last_name'],
                'bdate' => $userdata['bdate'],
                'exp' => $userdata['exp'],
                'password' => $userdata['password']
            ]);
        }
    }
}

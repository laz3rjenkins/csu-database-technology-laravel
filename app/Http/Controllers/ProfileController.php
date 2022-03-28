<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $allUsers = User::where('id', '!=', $user->id)->orderBy('role', 'desc')->paginate(10);
        // todo: также сделать попап с джейквери и дать возможность публиковать новости
        // также сделать возможность менять какие-нибудь данные в профиле
        return view('profile.index', ['user' => $user, 'allUsers' => $allUsers]);
    }

    public function setAdmin(Request $request){
        $user = User::find($request->get('id'));
        $user->role = 1;
        $user->save();
        return response()->json(['status' => 200]);
    }

    public function disableAdmin(Request $request){
        $user = User::find($request->get('id'));
        $user->role = 0;
        $user->save();
        return response()->json(['status' => 200]);
    }

}

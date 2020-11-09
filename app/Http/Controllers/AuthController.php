<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   /* public function __construct(){//конструктор класса
        $this->middleware('auth');
    }*/

    public function getSignup(){//Регистрация
        return view('/registration/checkin');
    }

    public function postSignup(Request $request){// здесь хранятся данные получаемые от формы
        $this->validate($request,[
        'name'=>'required|unique:users|max:255',
        'email'=>'required|email|max:20',
        'password'=>'required|min:6'
        ]);
        user::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))
        ]);
        return redirect()->route('main')->with('info','Регистрация пройдена');
    }

    public function signIn(Request $request){// Вход
        $auth = Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))
        ], false);

        if (!$auth){
            return redirect()->intended('signup')->withErorr(['Ошибка авторизации']);
        }
        return redirect()->intended('account');
    }


}

<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\user;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignUp(){
        return view('/auth/signup');
    }

    public function postSignUp(Request $request){// здесь хранятся данные получаемые от формы
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

    public function getSignIn()
    {
        return view('/auth/signin');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|max:255',
            'password'=>'required|min:6'
        ]);

        if (!Auth::attempt($request->only(['email','password']),$request->has('remember'))){
            return redirect()->back()->with('info','Неправильный логин или пароль');
        }
        return redirect()->route('main')->with('info','Вы авторизировались');
    }

    public function getSignOut(){
        Auth::logout();
        return redirect()->route('main');
    }

}

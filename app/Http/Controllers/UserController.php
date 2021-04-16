<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function actionUsers(){
        $users=user::getAllUsers();

        //return view('viewUsers', compact('users'));
        return view('admin.user.user', ['users'=>$users->all()]);
    }
}

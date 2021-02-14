<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function actionUsers($id){
        $users=user::getAllUsers();
        return view('admin.users', ['users'=>$users]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminbarController extends Controller
{ 
    public function Login(Request $req)
    {
        $data = $req->validate(['login'=>'required','password' =>'required']);
        $logA=$data['login'];
        $pasA=$data['password'];
        

        if ($logA=='root'&&$pasA=='root') {
            return redirect(route('admins'));
        }
        return 'Ошибка входа';
    }
}
 
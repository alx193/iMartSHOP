<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function login(Request $req)
    {
        // $user = new User;
        $user= User::where(['email'=>$req->email ])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
        return "Username or password inncorrect!";
        }
        else 
        {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
    function register(Request $requ)
    {

        $user = new User;
        $user->name=$requ->name;
        $user->email=$requ->email;
        $user->passowrd=Hash::make($requ->password);
        $user->save();
        return redirect('/');
    
    }
}

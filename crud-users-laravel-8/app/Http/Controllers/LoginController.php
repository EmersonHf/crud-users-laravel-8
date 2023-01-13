<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Hash;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginUser(Request $request){
        $request->validate([

            'email' => 'required|email',
            'password'=>'required|min:6|max:20',

           ]);
           $user = User::where('email','=',$request->email)->first();
           if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('falha','senha incorreta');
            }
           }else{
            return back()->with('falha','this email is not registered');
           }
    }
}

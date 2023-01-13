<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterUserController extends Controller
{
    public function registerUser(Request $request){
       $request->validate([
        'name' => 'required|string|min:3|max:250',
        'email' => 'required|email|unique:App\Models\User',
        'password'=>'required|min:6|max:20',
        'cpf' => 'required|numeric|digits:11|unique:App\Models\User',
        'cep' =>'required|numeric|digits:8',
        'estado'=>'string',
        'cidade'=>'string'
       ]);
       $user = new User();
       $user-> name = $request->name;
       $user-> email = $request->email;
       $user-> password = Hash::make($request->password);
       $user->cpf = $request->cpf;
       $user->cep = $request->cep;
       $user->estado = $request->estado;
       $user->cidade = $request->cidade;
       $res = $user->save();
       if($res){
        return back()->with('sucesso','você foi cadastrado com sucesso.');
       }else {
        return back()->with('falha','algo deu errado');
       }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use Hash;

class UserController extends Controller
{

public function dashboard(){

    $data = array();
    if(Session::has('loginId')){
        $data = User::where('id','=',Session::get('loginId'))->first();
    }
    return view('dashboard',compact('data'));
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
       $res = $user;

        User::create($request->all());
        if($res){
            return redirect()->route('users.index')
                        ->with('sucesso','Usuario criado  com sucesso.');
           }else {
            return back()->with('falha','algo deu errado');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

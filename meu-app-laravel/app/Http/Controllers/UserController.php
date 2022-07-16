<?php

namespace App\Http\Controllers;

use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        //dd($users);

        return view('users.index', compact('users'));
    }

    public function show($id){

        //$user = User::find($id);

        //$user = User::where('id', $id)->first();

        if(!$user = User::find($id))
            return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }
    
    // public function index(){
    //     $users = [
    //         'nomes' => ['Camila Ferreira', 'Josefer Climber']
    //     ];

    //     dd($users);
    // }

    // public function show($id){
    //     dd('Id do usuario eh: ' .$id);
    // }
}
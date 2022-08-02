<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        

        return view('users.index', compact('users'));
    }

    public function show($id){

        
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        $title = 'Usuario ' . $user->name;

        return view('users.show', compact('user', 'title'));
    }
    
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
     
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('users.index');

    }
}
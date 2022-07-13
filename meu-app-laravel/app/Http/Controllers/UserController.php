<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = [
            'nomes' => ['Camila Ferreira', 'Josefer Climber']
        ];

        dd($users);
    }

    public function show($id){
        dd('Id do usuario eh: ' .$id);
    }
}
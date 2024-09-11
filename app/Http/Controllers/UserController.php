<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        //Recuperar os registros do bando de dados
        $users = User::get();

        return view('users.index', ['users' => $users]);
    }
}

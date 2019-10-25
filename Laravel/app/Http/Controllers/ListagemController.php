<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ListagemController extends Controller
{
    public function index()
    {


        /*$user = auth()->user();
        */

        $users = User::all();           
        return view('listagem', compact('users'));

    }
}

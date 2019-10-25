<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EditarController extends Controller
{
    public function index()
    {
       
        return view('editar');

    }

}

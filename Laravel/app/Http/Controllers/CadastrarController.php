<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CadastrarController extends Controller
{
    public function index()
    {
        return view('cadastrar');
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'nome' => 'required',
            'emprego' => 'required',
            'email' => 'required',
            'senha' => 'required'            

        ]);

        $usuario = new User;
        $usuario->name = $request->input('nome');
        $usuario->emprego = $request->input('emprego');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('senha');
        $usuario->save();

        return redirect('/admin/cadastrar');


    }

    public function edit ($id)
    {
        $usuario = User::where('id', $id)->first();
        return view('editar', ['usuario' => $usuario]);
                      
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            
            'emprego' => 'required',            
            'senha' => 'required'            

        ]);

        $usuario = User::find($id);
        $usuario->emprego = $request->input('emprego');
        $usuario->password = $request->input('senha');
        $usuario->save();

        return redirect('/admin/listagem');

    }

    public function destroy(Request $request)
    {

        $usuario = User::findOrFail($request->usuario_id);
        $usuario->delete();

        return back();
        
      
    }


}

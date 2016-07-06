<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::orderBy("created_at","desc")->get();
        return view('funcionario/inicio',compact("funcionarios"));
    }

    public function create()
    {
        return view('funcionario/create');
    }


    public function store(Request $request)
    {
        $funcionario = array(
            'nome' => $request->nome,
            'telefone' => $request->telefone,
        );
        Funcionario::create($funcionario);
        return redirect("funcionario");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        return view("funcionario/edit",compact("funcionario"));
    }

    public function update(Request $request, $id)
    {
        $funcionario = array(
            'nome' => $request->nome,
            'telefone' => $request->telefone,
        );
        Funcionario::find($id)->update($funcionario);
        return redirect("funcionario");
    }

    public function destroy($id)
    {
        Funcionario::find($id)->delete();
        return redirect('funcionario');
    }
}

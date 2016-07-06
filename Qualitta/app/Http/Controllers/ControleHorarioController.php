<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Controle_Horario;

use App\Funcionario;

class ControleHorarioController extends Controller
{
    public function index()
    {
        $horarios = Controle_Horario::orderBy("created_at","desc")->get();
        return view('controlehorario/inicio',compact("horarios"));
    }

    public function create()
    {
        $funcionarios = Funcionario::lists('nome','id');
        return view('controlehorario/create', compact('funcionarios'));
    }


    public function store(Request $request)
    {
        Controle_Horario::create($request->all());
        return redirect("horario");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $funcionarios = Funcionario::lists('nome','id');
        $horario = Controle_Horario::find($id);
        return view("controlehorario/edit",compact("horario","funcionarios"));
    }

    public function update(Request $request, $id)
    {
        Controle_Horario::find($id)->update($request->all());
        return redirect("horario");
    }

    public function destroy($id)
    {
        Controle_Horario::find($id)->delete();
        return redirect('horario');
    }
}

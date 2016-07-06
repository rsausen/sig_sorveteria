<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::orderBy("created_at","desc")->get();
        return view('agenda/inicio',compact("agendas"));
    }

    public function create()
    {
        return view('agenda/create');
    }


    public function store(Request $request)
    {
        $data = implode('-', array_reverse(explode('/', $request->data)));
        $agenda = array(
            'data'=>$data,
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'hora'=>$request->hora
            );
        Agenda::create($agenda);
        return redirect("agenda");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $agenda = Agenda::find($id);
        $aux=explode('-',$agenda->data);
        $agenda->data=$aux[2].'/'.$aux[1].'/'.$aux[0];
        return view("agenda/edit",compact("agenda"));
    }

    public function update(Request $request, $id)
    {
        $data = implode('-', array_reverse(explode('/', $request->data)));
        $agenda = array(
            'data'=>$data,
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'hora'=>$request->hora
            );
        Agenda::find($id)->update($agenda);
        return redirect("agenda");
    }

    public function destroy($id)
    {
        Agenda::find($id)->delete();
        return redirect('agenda');
    }
}

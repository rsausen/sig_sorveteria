<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Nota;
use App\Fornecedor;
use App\Produto;
use App\Item_Nota;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::orderBy("created_at","desc")->get();
        foreach($notas as $nt){
            $aux=explode('-',$nt->data);
            $nt->data=$aux[2].'/'.$aux[1].'/'.$aux[0];
        }
        return view('nota/inicio',compact("notas"));
    }

    public function create()
    {
        $fornecedores = Fornecedor::lists('nome','id');
        return view('nota/create',compact('fornecedores'));
    }


    public function store(Request $request)
    {
        $data = implode('-', array_reverse(explode('/', $request->data)));
        $registro = array(
            'data'=>$data,
            'total'=>$request->total,
            'fornecedor_id'=>$request->fornecedor_id
        );
        $rg = Nota::create($registro);
        $nota = $rg->id;
        
        return redirect("item/".$nota);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $nota = Nota::find($id);
        $aux=explode('-',$nota->data);
        $nota->data=$aux[2].'/'.$aux[1].'/'.$aux[0];
        $fornecedores = Fornecedor::lists('nome','id');
        return view("nota/edit",compact("nota","fornecedores"));
    }

    public function update(Request $request, $id)
    {
        $data = implode('-', array_reverse(explode('/', $request->data)));
        $nota = array(
            'data'=>$data,
            'fornecedor_id'=>$request->fornecedor_id
        );
        Nota::find($id)->update($nota);
        return redirect("nota");
    }

    public function destroy($id)
    {
        Nota::find($id)->delete();
        return redirect('nota');
    }
}

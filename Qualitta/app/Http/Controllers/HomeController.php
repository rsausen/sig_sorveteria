<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Cidade;
use App\Agenda;
use App\Pagamento;
use App\Controle_Horario;
use App\Funcionario;

class HomeController extends Controller
{
    public function index()
    {
    	$data = Date('Y-m-d');
    	$agenda = Agenda::where('data',$data)->orderBy('hora','asc')->get();
    	$pagamento = Pagamento::where('vencimento',$data)->where('pago','0')->get();
        return view('base/home',compact('agenda','pagamento'));
    }

    public function getCidades($id)
    {
        $cidades = Cidade::where('codigo_estado',$id)->get(['nome','codigo_cidade']);
        return $cidades;
    }

    public function honorarios(){
        $funcionario = Funcionario::all();
        $hn = Controle_Horario::where('ativo','0')->groupby('funcionario_id')->get();
        
        foreach($funcionario as $func){
            foreach($hn as $h){
                if($func->id == $h->funcionario_id){
                    $output = 0;
                    $output = $this->calcHora($h->entrada,$h->saida);
                    dd(mktime(date($func->totalHoras) + date($output)));
                    $func->totalHoras += $output; 
                }
            }
        }
        dd($funcionario);

    }

    function calcHora($hora1,$hora2){

        $hora1 = explode(":",$hora1);
        $hora2 = explode(":",$hora2);
        $acumulador1 = ($hora1[0] * 3600) + ($hora1[1] * 60) + $hora1[2];
        $acumulador2 = ($hora2[0] * 3600) + ($hora2[1] * 60) + $hora2[2];
        $resultado = $acumulador2 - $acumulador1;
        $hora_ponto = floor($resultado / 3600);
        $resultado = $resultado - ($hora_ponto * 3600);
        $min_ponto = floor($resultado / 60);
        return $hora_ponto.":".$min_ponto;
    }
}

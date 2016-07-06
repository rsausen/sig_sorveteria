@extends('base')

@section('content')
<ol class="breadcrumb">
	  <li><a href="{{url('/')}}">Início</a></li>
	  <li><a href="{{url('/pagamento')}}">Pagamento</a></li>
	  <li class="active">Editar Registro</li>
</ol>
{!! Form::open(array('url' => 'pagamento/'.$pagamento->id,'method'=>'put')) !!}
    <div class="form-group">
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', $pagamento->nome, ['class' => 'form-control', 'placeholder' => 'Informe o Nome do Pagamento']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('vencimento', 'Data de Vencimento') !!}
    {!! Form::text('vencimento', $pagamento->vencimento, ['class' => 'form-control', 'placeholder' => 'Informe a Data de Vencimento', 'id' => 'data']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('valor', 'Valor') !!}
    {!! Form::text('valor', $pagamento->valor, ['class' => 'form-control', 'placeholder' => 'Informe o Valor', 'id' => 'valor']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('pago', 'Pago') !!}
    {!! Form::checkbox('pago', 1,$pagamento->pago) !!}
    </div>
    {!! Form::submit('Editar',['class' => 'btn btn-default btn-add']) !!}
{!! Form::close() !!}
@endsection

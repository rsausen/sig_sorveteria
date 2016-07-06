@extends('base')

@section('content')
<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Início</a></li>
      <li><a href="{{url('/horario')}}">Horário</a></li>
      <li class="active">Novo Horário</li>
    </ol>
{!! Form::open(array('url' => 'horario')) !!}
    <div class="form-group">
    {!! Form::label('funcionario_id', 'Funcionário') !!}
    {!! Form::select('funcionario_id', $funcionarios,null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('entrada', 'Hora de Entrada') !!}
    {!! Form::text('entrada', null, ['class' => 'form-control', 'placeholder' => 'Informe a hora de entrada', 'id'=>'entrada']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('saida', 'Hora de Saída') !!}
    {!! Form::text('saida', null, ['class' => 'form-control', 'placeholder' => 'Informe a hora de saída', 'id'=>'saida']) !!}
    </div>
    {!! Form::submit('Cadastrar',['class' => 'btn btn-default btn-add']) !!}
{!! Form::close() !!}
@endsection

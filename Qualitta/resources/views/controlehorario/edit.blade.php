@extends('base')

@section('content')
<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Início</a></li>
      <li><a href="{{url('/horario')}}">Horario</a></li>
      <li class="active">Editar Horario</li>
    </ol>
{!! Form::open(array('url' => 'horario/'.$horario->id,'method'=>'put')) !!}
    <div class="form-group">
    {!! Form::label('funcionario_id', 'Funcionário') !!}
    {!! Form::select('funcionario_id', $funcionarios, $horario->funcionario_id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('entrada', 'Hora de Entrada') !!}
    {!! Form::text('entrada', $horario->entrada, ['class' => 'form-control', 'placeholder' => 'Informe a hora de entrada']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('saida', 'Hora de Saída') !!}
    {!! Form::text('saida', $horario->saida, ['class' => 'form-control', 'placeholder' => 'Informe a hora de saída']) !!}
    </div>
    {!! Form::submit('Editar',['class' => 'btn btn-default btn-add']) !!}
{!! Form::close() !!}
@endsection

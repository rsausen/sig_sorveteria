@extends('base')

@section('content')
<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Início</a></li>
      <li><a href="{{url('/funcionario')}}">Funcionário</a></li>
      <li class="active">Editar Registro</li>
    </ol>
{!! Form::open(array('url' => 'funcionario/'.$funcionario->id,'method'=>'put')) !!}
    <div class="form-group">
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', $funcionario->nome, ['class' => 'form-control', 'placeholder' => 'Informe o Nome']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('telefone', 'Telefone') !!}
    {!! Form::text('telefone', $funcionario->telefone, ['class' => 'form-control', 'placeholder' => 'Informe o Telefone']) !!}
    </div>
    {!! Form::submit('Editar',['class' => 'btn btn-default btn-add']) !!}
{!! Form::close() !!}
@endsection

@extends('base')

@section('content')
<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Início</a></li>
      <li><a href="{{url('/fornecedor')}}">Fornecedor</a></li>
      <li class="active">Novo Registro</li>
    </ol>
{!! Form::open(array('url' => 'fornecedor')) !!}
    <div class="form-group">
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Informe o Nome do Fornecedor']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('cnpj', 'CNPJ') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control', 'placeholder' => 'Informe o CNPJ', 'id'=>'cnpj']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('telefone', 'Telefone') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control', 'placeholder' => 'Informe o Telefone', 'id'=>'telefone']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('email', 'E-Mail') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Informe o E-mail']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('site', 'Site') !!}
    {!! Form::text('site', null, ['class' => 'form-control', 'placeholder' => 'Informe o Site']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('endereco', 'Endereço') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control', 'placeholder' => 'Informe o Endereço']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('estado_id', 'Estado') !!}
    {!! Form::select('estado_id', $estados, '21',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('cidade_id', 'Cidade') !!}
    {!! Form::select('cidade_id', $cidades, null,['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Cadastrar',['class' => 'btn btn-default btn-add']) !!}
{!! Form::close() !!}
@endsection

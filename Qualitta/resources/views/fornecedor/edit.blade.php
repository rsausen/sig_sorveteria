@extends('base')

@section('content')
<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Início</a></li>
      <li><a href="{{url('/fornecedor')}}">Fornecedor</a></li>
      <li class="active">Editar Registro</li>
    </ol>
{!! Form::open(array('url' => 'fornecedor/'.$fornecedor->id,'method'=>'put')) !!}
     <div class="form-group">
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', $fornecedor->nome, ['class' => 'form-control', 'placeholder' => 'Informe o Nome do Fornecedor']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('cnpj', 'CNPJ') !!}
    {!! Form::text('cnpj', $fornecedor->cnpj, ['class' => 'form-control', 'placeholder' => 'Informe o CNPJ', 'id'=>'cnpj']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('telefone', 'Telefone') !!}
    {!! Form::text('telefone', $fornecedor->telefone, ['class' => 'form-control', 'placeholder' => 'Informe o Telefone', 'id'=>'telefone']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('email', 'E-Mail') !!}
    {!! Form::text('email', $fornecedor->email, ['class' => 'form-control', 'placeholder' => 'Informe o E-mail']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('site', 'Site') !!}
    {!! Form::text('site', $fornecedor->site, ['class' => 'form-control', 'placeholder' => 'Informe o Site']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('endereco', 'Endereço') !!}
    {!! Form::text('endereco', $fornecedor->endereco, ['class' => 'form-control', 'placeholder' => 'Informe o Endereço']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('estado_id', 'Estado') !!}
    {!! Form::select('estado_id', $estados, '21',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('cidade_id', 'Cidade') !!}
    {!! Form::select('cidade_id', $cidades, $fornecedor->cidade_id,['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Editar',['class' => 'btn btn-default btn-add']) !!}
{!! Form::close() !!}
@endsection

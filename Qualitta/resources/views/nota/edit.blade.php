@extends('base')

@section('content')
<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Início</a></li>
      <li><a href="{{url('/nota')}}">Nota Fiscal</a></li>
      <li class="active">Editar Nota</li>
    </ol>
{!! Form::open(array('url' => 'nota/'.$nota->id,'method'=>'put')) !!}
   	<div class="form-group">
    {!! Form::label('data', 'Data da Nota') !!}
    {!! Form::text('data', $nota->data, ['class' => 'form-control', 'placeholder' => 'Informe a Data da Nota', 'id'=>'data']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('fornecedor', 'Fornecedor') !!}
    {!! Form::select('fornecedor_id', $fornecedores, $nota->fornecedor_id,['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Editar',['class' => 'btn btn-default btn-add']) !!}
{!! Form::close() !!}
@endsection
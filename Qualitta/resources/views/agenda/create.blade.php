@extends('base')

@section('content')
	<ol class="breadcrumb">
	  <li><a href="{{url('/')}}">Início</a></li>
	  <li><a href="{{url('/agenda')}}">Agenda</a></li>
	  <li class="active">Novo Registro</li>
	</ol>
	{!! Form::open(array('url' => 'agenda')) !!}
		<div class="form-group">
		    {!! Form::label('nome', 'Título') !!}
		    {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Informe o Título do Lembrete']) !!}
	    </div>
	    <div class="form-group">
		    {!! Form::label('descricao', 'Descrição') !!}
		    {!! Form::textarea('descricao', null,['class' => 'form-control', 'placeholder' => 'Descrição']) !!}
	    </div>
	    <div class="form-group">
		    {!! Form::label('data', 'Data') !!}
		    {!! Form::text('data', null,['class' => 'form-control', 'placeholder' => 'Informe a Data','id'=>'data']) !!}
		</div>
		<div class="form-group">
		    {!! Form::label('hora', 'Hora') !!}
		    {!! Form::text('hora', null,['class' => 'form-control', 'placeholder' => 'Informe a Hora', 'id'=>'hora']) !!}
		</div>
	    {!! Form::submit('Cadastrar',['class' => 'btn btn-default btn-add']) !!}
	{!! Form::close() !!}
@endsection

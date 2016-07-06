@extends('base')

@section('content')
		<ol class="breadcrumb">
		  <li><a href="{{url('/')}}">Início</a></li>
		  <li class="active">Agenda</li>
		</ol>
		<div class='col-sm-12 col-lg-12'>
			<a href="{{url('agenda/create')}}" type="button" class='btn btn-default adicionar pull-right'>Adicionar</a>
		</div>
		<table class="table table-striped">
		<thead>
		    <tr>
		      <th>#</th>
		      <th>Nome</th>
		      <th>Editar</th>
		      <th>Excluir</th>
		    </tr>
		</thead>
		<tbody>
		@foreach($agendas as $age)
			<tr>
			<td>{{$age->id}}</td>
			<td>{{$age->nome}}</td>
			<td><a href="{{url('agenda/'.$age->id.'/edit')}}" class='btn btn-default'>Editar</a></td>
			<td>
				{!! Form::open(['route'=>['agenda.destroy',$age->id], 'method'=>'delete'])!!}
				{!! Form::submit('Excluir',['class' => 'btn btn-default']) !!}
				{!! Form::close() !!}
			</td>
			</tr>
		@endforeach
		</tbody>
		</table>
@endsection

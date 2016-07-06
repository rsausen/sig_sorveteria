@extends('base')

@section('content')
<ol class="breadcrumb">
		  <li><a href="{{url('/')}}">Início</a></li>
		  <li class="active">Controle de Horário</li>
		</ol>
		<div class='col-sm-12 col-lg-12'>
			<a href="{{url('horario/create')}}" type="button" class='btn btn-default adicionar pull-right'>Adicionar</a>
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
	@foreach($horarios as $hor)
	<tr>
			<td>{{$hor->id}}</td>
			<td>{{$hor->funcionario->nome}}</td>
			<td><a href="{{url('horario/'.$hor->id.'/edit')}}" class='btn btn-default'>Editar</a></td>
			<td>
				{!! Form::open(['route'=>['horario.destroy',$hor->id], 'method'=>'delete'])!!}
				{!! Form::submit('Excluir',['class' => 'btn btn-default']) !!}
				{!! Form::close() !!}
			</td>
			</tr>
	@endforeach
	</tbody>
	</table>
@endsection
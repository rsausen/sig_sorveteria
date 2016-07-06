@extends('base')

@section('content')
<ol class="breadcrumb">
		  <li><a href="{{url('/')}}">Início</a></li>
		  <li class="active">Fornecedor</li>
		</ol>
		<div class='col-sm-12 col-lg-12'>
			<a href="{{url('fornecedor/create')}}" type="button" class='btn btn-default adicionar pull-right'>Adicionar</a>
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
	@foreach($fornecedores as $forn)
	<tr>
			<td>{{$forn->id}}</td>
			<td>{{$forn->nome}}</td>
			<td><a href="{{url('fornecedor/'.$forn->id.'/edit')}}" class='btn btn-default'>Editar</a></td>
			<td>
				{!! Form::open(['route'=>['fornecedor.destroy',$forn->id], 'method'=>'delete'])!!}
				{!! Form::submit('Excluir',['class' => 'btn btn-default']) !!}
				{!! Form::close() !!}
			</td>
			</tr>
	@endforeach
	</tbody>
	</table>
@endsection

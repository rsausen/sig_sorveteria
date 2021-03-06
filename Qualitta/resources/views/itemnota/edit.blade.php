@extends('base')

@section('content')
<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Início</a></li>
      <li><a href="{{url('/item/'.$item->nota_id)}}">Item Nota Fiscal</a></li>
      <li class="active">Editar Item</li>
    </ol>
{!! Form::open(array('url' => 'item/update')) !!}
	<input type="hidden" value="{{ $item->nota_id }}" name="nota_id">
    <input type="hidden" value="{{ $item->id }}" name="id">
    <div class="form-group">
    {!! Form::label('produto', 'Produto') !!}
    {!! Form::select('produto_id', $produtos, $item->produto_id,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('preco', 'Valor') !!}
    {!! Form::text('preco', $item->preco, ['class' => 'form-control', 'placeholder' => 'Informe a Valor do Produto', 'id'=>'valor']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('quantidade', 'Quantidade') !!}
    {!! Form::text('quantidade', $item->quantidade,['class' => 'form-control', 'placeholder' => 'Informe a Quantidade do Produto']) !!}
    </div>
    {!! Form::submit('Editar',['class' => 'btn btn-default btn-add']) !!}
{!! Form::close() !!}
@endsection
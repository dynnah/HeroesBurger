@extends('layouts.app')

@section('title', 'Products')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <td>Id</td>
      <td>Nome</td>
      <td>Descrição</td>
      <td>Preço</td>
      <td>Tipo</td>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>{{$product->id}}</td>
      <td>{{$product->nome}}</td>
      <td>{{$product->descricao}}</td>
      <td>{{$product->preco}}</td>
      <td>{{$product->tipo}}</td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
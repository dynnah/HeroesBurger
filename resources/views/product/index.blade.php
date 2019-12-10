@extends('layouts.app')

@section('title', 'Products')

@section('imagem')
<img src="images/produtos.png">
@endsection

@section('content')
@if(session()->get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session('success') }}</strong>
</div>
@endif
<div class="row">
@foreach($products as $product)
  <div class="col-sm-4">
    <div class="card" style="width: 18rem; margin-bottom:25px;">
      <div class="card-body">
      <img class="card-img-top" src="/images/products/{{$product->codigo}}.webp" alt="Produto" style="width:100%">
      <p class="card-title">{{$product->nome}}</p>
      <p class="card-subtitle mb-2 text-muted">{{$product->tipo}}</p>
      <p class="card-text">Preço: R$ {{$product->preco}}</p>
      <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary stretched-link">Ver Produto</a>
      <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary stretched-link">Editar Produto</a>  
    </div>
    </div>
  </div>

  @endforeach
  
</div>
@endsection
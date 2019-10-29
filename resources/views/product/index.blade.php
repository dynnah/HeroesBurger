@extends('layouts.app')

@section('title', 'Products')

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
      <img class="card-img-top" src="/images/img.png" alt="Card image" style="width:100%">
      <p class="card-title">{{$product->nome}}</p>
      <p class="card-subtitle mb-2 text-muted">{{$product->tipo}}</p>
      <p class="card-text">Preço: R$ {{$product->preco}}</p>
      <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary stretched-link">View Product</a>
      <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary stretched-link">Edit Product</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
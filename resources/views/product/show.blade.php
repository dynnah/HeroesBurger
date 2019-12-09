@extends('layouts.app')
@section('title', 'Show Product')

@section('content')

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/images/img.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-title">{{$product->nome}}</p>
      <p class="card-subtitle mb-2 text-muted">{{$product->tipo}}</p>
      <p class="card-text">{{$product->descricao}}</p>
      <p class="card-text">Preço: R$ {{$product->preco}}</p>
      </div>
    </div>
  </div>
</div>

@endsection
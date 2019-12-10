@extends('layouts.app')
@section('title', 'Show Coupon')

@section('content')

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/images/cupom.png" class="card-img" alt="Cupom">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-title">{{$coupon->nome}}</p>
      <p class="card-text">{{$coupon->descricao}}</p>
      <p class="card-text">Preço: R$ {{$coupon->preco}}</p>
      </div>
    </div>
  </div>
</div>

@endsection
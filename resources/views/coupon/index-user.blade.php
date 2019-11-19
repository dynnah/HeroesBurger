@extends('layouts.app')
@section('title', 'Coupons')

@section('imagem')
<img src="images/cupons.png">
@endsection


@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif
<div class="row">
@foreach($coupons as $coupon)
  <div class="col-sm-4">
    <div class="card" style="width: 18rem; margin-bottom:25px;">
      <div class="card-body">
      <img class="card-img-top" src="/images/img.png" alt="Card image" style="width:100%">
      <p class="card-title">{{$coupon->nome}}</p>
      <p class="card-subtitle mb-2 text-muted">{{$coupon->tipo}}</p>
      <p class="card-text">Preço: R$ {{$coupon->preco}}</p>
      <a href="{{ route('coupons.show', $coupon->id) }}" class="btn btn-primary stretched-link">View Coupon</a>
      </div>
    </div>
  </div>

  @endforeach
@endsection
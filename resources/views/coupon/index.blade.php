@extends('layouts.app')

@section('title', 'Index Coupons')

@section('imagem')
<img src="images/cupons.png">
@endsection

@section('content')
@if(session()->get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session('success') }}</strong>
</div>
@endif
<div class="table-responsive">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço (R$)</th>
      <th colspan="1">Action</th>
      <th colspan="2"><a href="{{ route('coupons.create') }}" class="btn btn-primary" role="button">Criar Coupon</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach($coupons as $coupon)
    <tr>
      <td>{{$coupon->id}}</td>
      <td>{{$coupon->nome}}</td>
      <td>{{$coupon->descricao}}</td>
      <td>{{$coupon->preco}}</td>
      <td><a href="{{ route('coupons.show', $coupon->id) }}" class="btn btn-primary" role="button">Show Coupon</a></td>
      <td><a href="{{ route('coupons.edit', $coupon->id) }}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="{{ route('coupons.destroy', $coupon->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
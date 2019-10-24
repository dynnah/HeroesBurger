@extends('layouts.app')

@section('title', 'Show Coupon')

@section('content')
<div class="table-responsive">
<table class="table table-sm table-hover">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>{{$coupon->id}}</td>
      <td>{{$coupon->nome}}</td>
      <td>{{$coupon->descricao}}</td>
      <td>{{$coupon->preco}}</td>
      </tr>
  </tbody>
</table>
</div>

@endsection
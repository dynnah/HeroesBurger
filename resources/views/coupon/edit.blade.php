@extends('layouts.app')

@section('title', 'Edit Coupon')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Product
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form method="post" action="{{ route('coupons.update', $coupon->id)}}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $coupon->nome }}" />
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do Cupom:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $coupon->descricao }}" />
      </div>
      <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" value="{{ $coupon->preco }}" />
      </div>
      <button type="submit" class="btn btn-primary">Update Coupon</button>
    </form>
  </div>
</div>
@endsection
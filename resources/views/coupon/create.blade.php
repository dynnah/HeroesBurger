@extends('layouts.app')

@section('title', 'Create Coupon')

@section('content')
<div class="card">
  <div class="card-header">
    Add Product
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
    <form method="post" action="{{ route('coupons.store') }}">
      <div class="form-group">
        @csrf
        <label for="nome">Nome do Cupom:</label>
        <input type="text" class="form-control" id="nome" name="nome" />
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do Cupom:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" />
      </div>
      <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" />
      </div>
      <button type="submit" class="btn btn-primary">Create Coupon</button>
    </form>
  </div>
</div>
@endsection
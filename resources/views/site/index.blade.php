@extends('layouts.layout')
@section('content')
<br>
<div class="card text-center container" style="width: 35rem">
  <div class="card-header">
    Oferecimento: 3GF
  </div>
  <div class="card-body">
    <h5 class="card-title">Bem-vindo!</h5>
    <p class="card-text">Seja bem-vindo ao e-commerce do grupo 3GF!
        Aqui você poderá encontrar diversos produtos cadastrados e testar as funções de CRUD presentes em nosso website.
    </p>
    <a href="{{route ('produto.listar')}}" class="btn btn-primary">Lista de Produtos</a>
  </div>
</div>
@endsection

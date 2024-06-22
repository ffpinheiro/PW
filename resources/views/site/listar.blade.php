@extends('layouts.layout')

@section('content')
  @if (!empty($result) && $result->count())
  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($result as $item)
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$item->nome}}</text>
              </svg>
              <div class="card-body">
                <p class="card-text">{{ $item->descricao }}</p>
                <p class="card-text"><strong>R$ {{$item->preco}}</strong></p>
                <div class="d-flex justify-content-between align-items-center">
                @auth
                <div class="btn-group">
                    <a href="{{route('produto.alterar',['produto'=>$item->id])}}" class="btn btn-warning" role="button">Alterar</a>
                    <a href="{{route('produto.delete',['produto'=>$item->id])}}" class="btn btn-danger" role="button">Deletar</a>
                  </div>
                @endauth  

                  <small class="text-body-secondary">{{$item->tipo}}</small>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="card container" style="width: 25rem;">
      <div class="card-body">
        <p class="card-text">Caso queira inserir um produto, clique no botão abaixo para inserir um novo!</p>
        <a href="{{route('produto.create')}}" class="btn btn-primary">Inserir Produto</a>
      </div>
    </div>
  @else
  <br>
  <br>
    <div class="card container" style="width: 25rem;">
      <div class="card-body">
        <h5 class="card-title">Não encontrou nenhum produto?</h5>
        <p class="card-text">Caso não esteja vendo nada, clique no botão abaixo para inserir um novo produto em nosso banco de dados!</p>
        <a href="{{route('produto.create')}}" class="btn btn-primary">Inserir Produto</a>
      </div>
    </div>
  @endif
@endsection

@extends('layouts.layout')

@section('content') 
  <div class="container">
    <h2 class="mt-5">Alterar Produto</h2>
    {{-- Linha alterada no formuulario para passar os dados do formulario utilizando o ID correto--}}
    <form action="{{route('produto.update',['produto' => $item->id])}}" method="POST">
      {{-- cria um toquem para validar o formulario eviando ataques do tipo csrf--}}
      @csrf()
      {{--insere o metodo PUT para receber os dados do formulario para alteração--}}
      @method('PUT')
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name='nome' placeholder="Nome do Produto..." value="{{$item->nome}}" readonly>
      </div>
      <div class="form-group">
      <label for="tipo">Tipo do Produto:</label>
      <input type="text" class="form-control" id="tipo" name='tipo' placeholder="Tipo do Produto..."  value="{{$item->tipo}}">
      </div>
      <div class="form-group">
        <label for="preco">Preço do Produto:</label>
        <input type="text" class="form-control" id="preco" name='preco' placeholder="Nome"  value="{{$item->preco}}">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do produto:</label>
        <textarea class="form-control" id="descricao" name='descricao' rows="4" placeholder="Digite a descrição do produto..." required></textarea>
    </div>  
      <hr>
      <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
  </div>
@endsection
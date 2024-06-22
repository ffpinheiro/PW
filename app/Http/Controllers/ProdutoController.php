<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
     $result = Produto::orderBy('created_at','ASC')->get();;
     return view('site.listar', ['result' =>$result]);
    }

    public function create(){
        return view('site.inserir_produto');
    }

   public function store(Request $request)
   {
    Produto::create($request->only(['nome','tipo','descricao','preco']));
    return redirect()->route('produto.listar');

   }

   public function alterar(Produto $produto)
   {
    return view('site.alterar',['item'=>$produto]);
   }

   public function update(Request $request, Produto $produto)
   {
    $produto->update([
        'nome' =>$request->nome,
        'tipo' =>$request->tipo,
        'preco' =>$request->preco,
        'descricao' =>$request->descricao,
    ]);
    return redirect()->route('produto.listar');
   }

   public function delete(Produto $produto)
   {
    $produto->delete();
    return redirect()->route('produto.listar');
   }
}
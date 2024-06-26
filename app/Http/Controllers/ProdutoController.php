<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        $produtosComImagem = $produtos->map(function ($produtos) {
            return [
                'id' => $produtos->id,
                'nome' => $produtos->nome,
                'preco' => $produtos->preco,
                'ingredientes' => $produtos->ingredientes,
                'imagem' => asset('storage/' . $produtos->imagem)
            ];
        });
        return response()->json($produtosComImagem);
    }

    public function store(Request $request)
    {
        $produtoData = $request->all();

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $caminhoImagem = $imagem->storeAs('imagens/produtos', $nomeImagem, 'public');
            $produtoData['imagem'] = $caminhoImagem;
        }
      
        $produto = Produto::create($produtoData);
        return response()->json([
            'produto' => $produto
        ], 201);
    }
}


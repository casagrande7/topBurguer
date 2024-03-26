<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoConctroller extends Controller
{
    public function index(){
        $produtos = Produto::all();

        $produtosComImagem = $produtos->map(function($produtos){
            return [
                'nome' => $produtos-> nome,
                'preco' => $produtos -> preco,
                'ingredientes' => $produtos -> ingredientes,
                'imagem' => asset('storage/' . $produtos-> imagem)
            ];
        });
        return response()-> json($produtosComImagem);
    }
}

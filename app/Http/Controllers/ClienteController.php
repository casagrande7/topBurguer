<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        $clientesComFoto = $clientes->map(function($clientes){
            return [
                'nome' => $clientes-> nome,
                'telefone' => $clientes -> telefone,
                'endereco' => $clientes -> endereco,
                'email' => $clientes -> email,
                'password' => $clientes -> password,
                'foto' => asset('storage/' . $clientes-> foto)
            ];
        });
        return response()-> json($clientesComFoto);
    }

    public function store(Request $request){
        $clienteData = $request->all();

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $caminhoImagem = $imagem->storeAs('imagens/produtos', $nomeImagem, 'public');
            $produtoData['imagem'] = $caminhoImagem;
        }
        $produto = Cliente::create($clienteData);
        return response()->json([
            'produto' => $produto
        ], 201);
         
    }
}

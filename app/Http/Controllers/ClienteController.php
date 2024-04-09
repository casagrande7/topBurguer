<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
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
                'cpf' => $clientes -> cpf,
                'foto' => asset('storage/' . $clientes-> foto)
            ];
        });
        return response()-> json($clientesComFoto);
    }

    public function store(ClienteFormRequest $request){
        $clienteData = $request->all();

        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $nomeFoto = time().'.'.$foto->getClientOriginalExtension();
            $caminhoImagem = $foto->storeAs('imagens/clientes', $nomeFoto, 'public');
            $clienteData['foto'] = $caminhoImagem;
        }
        $cliente = Cliente::create($clienteData);
        return response()->json([
            'cliente' => $cliente
        ], 201);
         
    }
}

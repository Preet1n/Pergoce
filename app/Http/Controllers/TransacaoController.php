<?php

namespace App\Http\Controllers;
use App\Models\Transacao;
use Illuminate\Http\Request;

class TransacaoController extends Controller
{
    // index transações
    public function transacoes()
    {
        return view('financas.transacoes.index');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'tipo' => 'required|in:receita,despesa',
            'data' => 'required|date',
        ]);

        // Criação manual da transação para associar o user_id
        $transacao = new Transacao($validatedData);
        $transacao->user_id = auth()->id(); // Associa o ID do usuário autenticado
        $transacao->save();

        // Retornar uma resposta ou redirecionar
        return response()->json(['message' => 'Transação registrada com sucesso!'], 201);
    }
    
    public function ultimosRegistros()
    {
        $transacoes = Transacao::orderBy('data', 'desc')->take(15)->get();

        return response()->json($transacoes);
    }

}


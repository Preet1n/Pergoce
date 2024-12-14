<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    // Dashboard financeiro
    public function dashboard()
    {
        return view('financas.dashboard');
    }

    // Página de relatórios
    public function relatorios()
    {
        return view('financas.relatorios');
    }

    // Página de orçamentos
    public function orcamentos()
    {
        return view('financas.orcamentos');
    }

    // Página de gestão de dívidas
    public function dividas()
    {
        return view('financas.dividas');
    }

    // Configurações
    public function configuracoes()
    {
        return view('financas.configuracoes');
    }
}

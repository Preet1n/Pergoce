<x-app-layout>
<div class="container mx-auto p-6">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Registrar Nova Transação</h2>

        <form action="{{ route('financas.transacoes.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="data" class="block text-gray-700 dark:text-gray-300">Data</label>
                <input type="date" id="data" name="data" class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
            </div>
            
            <div>
                <label for="descricao" class="block text-gray-700 dark:text-gray-300">Descrição</label>
                <input type="text" id="descricao" name="descricao" class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
            </div>
            
            <div>
                <label for="categoria" class="block text-gray-700 dark:text-gray-300">Categoria</label>
                <select id="categoria" name="categoria" class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
                    <option value="moradia">Moradia</option>
                    <option value="alimentacao">Alimentação</option>
                    <option value="lazer">Lazer</option>
                    <option value="transporte">Transporte</option>
                </select>
            </div>
            
            <div>
                <label for="valor" class="block text-gray-700 dark:text-gray-300">Valor</label>
                <input type="number" id="valor" name="valor" step="0.01" class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
            </div>
            
            <div>
                <label for="forma_pagamento" class="block text-gray-700 dark:text-gray-300">Forma de Pagamento</label>
                <select id="forma_pagamento" name="forma_pagamento" class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
                    <option value="pix">Pix</option>
                    <option value="dinheiro">Dinheiro</option>
                    <option value="cartao_credito">Cartão de Crédito</option>
                    <option value="cartao_debito">Cartão de Débito</option>
                </select>
            </div>
            
            <button type="submit" 
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                Salvar Transação
            </button>
        </form>
    </div>
</x-app-layout>    
<x-financas-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transações') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button id="btn-nova-transacao" class="bg-green-500 text-white px-4 py-2 rounded">Nova Transação</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Últimos Registros -->
    <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Últimos Registros</h3>
    <div id="ultimos-registros" class="dark:bg-gray-800 text-white shadow rounded p-4 mb-6">
    <php? ultimosRegistros() >      
    </div>      
    
<div id="form-transacao" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center">
    <div class="bg-white dark:bg-gray-800 p-6 rounded shadow-md w-1/3">
        <h2 class="text-lg dark:text-gray-200 font-semibold mb-4">Registrar Transação</h2>
        <form id="nova-transacao-form">
            <div class="mb-4">
                <label for="descricao" class="block font-medium dark:text-gray-200">Descrição</label>
                <input type="text" id="descricao" name="descricao" class="w-full border-gray-300 rounded ">
            </div>
            <div class="mb-4">
                <label for="valor" class="block font-medium dark:text-gray-200">Valor</label>
                <input type="number" step="0.01" id="valor" name="valor" class="w-full border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="tipo" class="block font-medium dark:text-gray-200">Tipo</label>
                <select id="tipo" name="tipo" class="w-full border-gray-300 rounded">
                    <option value="receita">Receita</option>
                    <option value="despesa">Despesa</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="data" class="block font-medium dark:text-gray-200 ">Data</label>
                <input type="date" name="data" id="data" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="flex justify-end">
                <button type="button" id="btn-cancelar" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Cancelar</button>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Salvar</button>
            </div>
        </form>
    </div>
</div>
    
</x-financas-layout>


<div class="sidebar bg-gray-500 text-lg dark:bg-gray-800 text-white w-64 min-h-screen">  

    <ul class="space-y-2">
        <li>
        <button id="menu-toggle" class="block md:hidden px-4 py-2 text-gray-200 hover:bg-gray-700">
        <svg xmlns="https://www.w3.org/TR/2018/CR-SVG2-20181004/" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
        </li>
        <li>
            <a href="{{ route('finance.dashboard') }}" class="flex items-center p-2 hover:bg-gray-700">
                <img src="{{ asset('images/dashboard-icon.png') }}" alt="Dashboard" class="w-6 h-6 mr-2">
                <span class="ml-3">Dashboard Financeiro</span>
            </a>
        </li>
        <li>
            <a href="{{ route('financas.transacoes.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <img src="{{ asset('images/transactions-icon.png') }}" alt="Dashboard" class="w-6 h-6 mr-2">
                <span class="ml-3">Transações</span>
            </a>
        </li>
        <li>
            <a href="{{ route('finance.relatorios') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <img src="{{ asset('images/relatorio-icon.png') }}" alt="Dashboard" class="w-6 h-6 mr-2">
                <span class="ml-3">Relatórios</span>
            </a>
        </li>
        <li>
            <a href="{{ route('finance.orcamentos') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <img src="{{ asset('images/W64-orcamento-icon.png') }}" alt="Dashboard" class="w-6 h-6 mr-2">
                <span class="ml-3">Orçamentos</span>
            </a>
        </li>
        <li>
            <a href="{{ route('finance.dividas') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <img src="{{ asset('images/W50-dividas-icon.png') }}" alt="Dashboard" class="w-6 h-6 mr-2">
                <span class="ml-3">Dívidas</span>
            </a>
        </li>
        <li>
            <a href="{{ route('finance.config') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <img src="{{ asset('images/W500-configuracoes-icon.png') }}" alt="Dashboard" class="w-6 h-6 mr-2">
                <span class="ml-3">Configurações</span>
            </a>
        </li>
    </ul>
</div>

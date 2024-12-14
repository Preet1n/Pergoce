import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const btnNovaTransacao = document.getElementById('btn-nova-transacao');
    const formTransacao = document.getElementById('form-transacao');
    const btnCancelar = document.getElementById('btn-cancelar');
    const form = document.getElementById('nova-transacao-form');

    // Mostrar o formulário
    btnNovaTransacao.addEventListener('click', () => {
        formTransacao.classList.remove('hidden');
    });

    // Esconder o formulário
    btnCancelar.addEventListener('click', () => {
        formTransacao.classList.add('hidden');
    });

    // Enviar o formulário
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const data = {
            descricao: document.getElementById('descricao').value,
            valor: document.getElementById('valor').value,
            tipo: document.getElementById('tipo').value,
            data: document.getElementById('data').value,
        };
        console.log((data).data);

        try {
            const response = await fetch('/financas/transacoes', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body: JSON.stringify(data),
            });

            if (response.ok) {
                alert('Transação registrada com sucesso!');
                form.reset();
                formTransacao.classList.add('hidden');


                // Carregar os últimos registros após salvar a transação
                loadLastTransactions();

            } else {
                alert('Erro ao registrar transação.');
            }
        } catch (error) {
            console.error('Erro:', error);
        }
    });

    // Função para carregar os últimos registros
    async function loadLastTransactions() {
        try {
            const response = await fetch('/financas/transacoes/ultimos');
            if (!response.ok) {
                throw new Error('Erro ao carregar registros');
            }
            const data = await response.json();
            
            // Exibir os registros
            const ul = document.getElementById('ultimos-registros');
            ul.innerHTML = ''; // Limpar o conteúdo existente
            
            if (data.length === 0) {
                ul.innerHTML = '<p>Sem registros.</p>';
            } else {
                data.forEach(transacao => {
                    const li = document.createElement('div');
                    li.classList.add('mb-4', 'p-4', 'border-b', 'border-gray-200');
                    li.innerHTML = `
                        <p><strong>Descrição:</strong> ${transacao.descricao}</p>
                        <p><strong>Valor:</strong> ${transacao.valor}</p>
                        <p><strong>Tipo:</strong> ${transacao.tipo}</p>
                        <p><strong>Data:</strong> ${new Date(transacao.data).toLocaleDateString()}</p>
                    `;
                    ul.appendChild(li);
                });
            }
        } catch (error) {
            console.error('Erro ao carregar registros:', error);
        }
    }
});

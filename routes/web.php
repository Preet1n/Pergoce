<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\TransacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('financas')->name('finance.')->group(function () {
    Route::get('/', [FinanceController::class, 'dashboard'])->name('dashboard');
    Route::get('/relatorios', [FinanceController::class, 'relatorios'])->name('relatorios');
    Route::get('/orcamentos', [FinanceController::class, 'orcamentos'])->name('orcamentos');
    Route::get('/dividas', [FinanceController::class, 'dividas'])->name('dividas');
    Route::get('/configuracoes', [FinanceController::class, 'configuracoes'])->name('config');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/financas/transacoes', [TransacaoController::class, 'transacoes'])->name('financas.transacoes.index');
    Route::post('/financas/transacoes', [TransacaoController::class, 'store'])->name('financas.transacoes.store');
    Route::get('/financas/transacoes/ultimos', [TransacaoController::class, 'ultimosRegistros'])->name('financas.transacoes.ultimos');
});

require __DIR__.'/auth.php';

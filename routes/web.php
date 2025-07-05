<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PremiumCalculatorController;

Route::get('/', [PremiumCalculatorController::class, 'dashboard']);
Route::get('/form', [PremiumCalculatorController::class, 'index'])->name('form');
Route::post('/calculate', [PremiumCalculatorController::class, 'calculate'])->name('calculate');
Route::get('/quote/{id}/download', [PremiumCalculatorController::class, 'downloadPDF'])->name('quote.download');
Route::get('/dashboard', [PremiumCalculatorController::class, 'dashboard'])->name('dashboard');
Route::get('/quote/{id}', [PremiumCalculatorController::class, 'show'])->name('quote.show');    
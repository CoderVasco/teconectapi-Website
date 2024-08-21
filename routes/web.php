<?php

use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rota para a página de suporte
Route::get('/support', function () {
    return view('pages.support');
})->name('support');

// Rota para a página de documentação
Route::get('/documentation', function () {
    return view('pages.documentation');
})->name('documentation');

// Rota para a página da comunidade (ainda não implementada)
// Route::get('/community', function () {
//     return view('pages.community');
// })->name('community');

// Observação: A rota da comunidade está sendo gerida via WhatsApp, por isso, ainda não foi implementada no sistema.

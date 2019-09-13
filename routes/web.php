<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ContratoController@listaAtraso');

Route::get('cadastrar participante', function () {
    return view('Participante.cad_participante');
});

Route::get('cadastrar contrato', function () {
    return view('Contrato.cad_contrato');
});

Route::get('termo', function () {
    return view('TermoReferencia.TermoInt');
});

Route::get('PessoaF', function () {
    return view('TermoReferencia.TORpessoafisica');
});

Route::get('PessoaJ', function () {
    return view('TermoReferencia.TORpessoajuridica');
});

Route::get('edit_contrato', function () {
    return view('Contrato.edit_contrato');
});

Route::get('listar participantes', 'ParticipanteController@lista');

Route::get('contratos', 'ContratoController@lista');

Route::get('edit_contrato', 'ContratoController@edit');

Route::get('criaContrato', 'ContratoController@cria');

Route::get('criaParticipante', 'ParticipanteController@cria');

Route::get('remove/{id}', 'ContratoController@remove')->name('remove');

Route::get('mostra/{id}', 'ContratoController@mostra')->name('mostra');

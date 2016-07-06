<?php

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/','HomeController');
    Route::resource('produto','ProdutoController');
    Route::resource('pagamento','PagamentoController');
    Route::resource('fornecedor','FornecedorController');
    Route::resource('agenda','AgendaController');
    Route::resource('nota','NotaController');
    Route::resource('horario','ControleHorarioController');
    Route::resource('funcionario','FuncionarioController');
    Route::get('/honorario','HomeController@honorarios');

    Route::get('item/{nota}','ItemNotaController@index');
    Route::post('item/create','ItemNotaController@store');
    Route::get('item/destroy/{id}','ItemNotaController@destroy');
    Route::get('item/{id}/edit','ItemNotaController@edit');
    Route::post('item/update','ItemNotaController@update');

    
    Route::get('user/profile', function () {
    });
    Route::get('getCidades/{id}', 'HomeController@getCidades');
});

Route::auth();

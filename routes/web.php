<?php

use Illuminate\Support\Facades\Route;

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

//

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('clientes', function(){ return 'Cliente'; })->name('app.clientes');
    Route::get('fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('produtos', function(){ return 'Produtos'; })->name('app.produtos');
});

Route::get('/rota1', function(){
    echo 'rota 1';
})->name('site.rota1');

//Route::redirect('/rota2', '/rota1');

Route::get('/rota2', function(){
     return redirect()->route('site.rota1');
 });

 Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para acessar a página inicial';
 });



//expressões regulares para rotas
// Route::get('contato/{nome}/{categoria_id}',
// function(
//     string $nome = 'Desconhecido',
//     int $categoria_id = 1
//     ){
//     echo "Estamos aqui: $nome - $categoria_id ";
// })->where('categoria_id', '[0-9]+')->where('nome','[A-Za-z]+');

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

Route::get('/', 'PrincipalController@principal')
        ->name('site.index')->middleware('log.acesso');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('login', 'LoginController@autenticar')->name('site.login');

Route::middleware('autenticacao:padrao,adm')->prefix('/app')->group(function(){
    Route::get('home', 'HomeController@index')->name('app.home');
    Route::get('sair', 'LoginController@sair')->name('app.sair');
    Route::get('cliente', 'ClienteController@index')->name('app.cliente');
    Route::get('fornecedor', 'FornecedorController@index')
        ->name('app.fornecedor');
    Route::get('produto', 'ProdutoController@index')->name('app.produto');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

//Route::redirect('/rota2', '/rota1');

// Route::get('/rota2', function(){
//      return redirect()->route('site.rota1');
//  });



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

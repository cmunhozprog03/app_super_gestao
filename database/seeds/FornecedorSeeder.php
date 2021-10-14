<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instanciando o Objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        // Utilizando o create
        Fornecedor::create([
            'nome' => 'fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'SP',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        //Insert
        DB::table('fornecedores')->insert([
            'nome' => 'fornecedor 300',
            'site' => 'fornecedor300.com.br',
            'uf' => 'RJ',
            'email' => 'contato@fornecedor300.com.br'
        ]);
    }
}

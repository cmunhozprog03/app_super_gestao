<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 1',
                'status' => 'N',
                'cnpj' => '00',
                'ddd' => '11',
                'telefone' => '5555-5555'
            ],
            1 => [
                'nome' => 'fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85',
                'telefone' => '8888-8888'
            ],
            2 => [
                'nome' => 'fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '',
                'telefone' => '3333-3333'
            ],


        ];

        
        return view('app.fornecedor.index', compact('fornecedores'));

    }
}

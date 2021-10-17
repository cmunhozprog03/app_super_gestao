<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {

        return view('app.fornecedor.index');

    }

    public function listar(Request $request)
    {
        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->nome.'%')
            ->where('site', 'like', '%'.$request->site.'%')
            ->where('uf', 'like', '%'.$request->uf.'%')
            ->where('email', 'like', '%'.$request->email.'%')
            ->paginate(2);

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }

    public function adicionar(Request $request)
    {
        $msg = '';

        //Inclusão
        if($request->input('_token') != '' && $request->input('id') == ''){
            //cadastro

            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'required|email',
            ];

            $feedback = [
                'required' => 'o campo :attribute é obrigatório.',
                'nome.min' => 'Este campo deve conter pelo menos 3 caracteres.',
                'nome.max' => 'Este campo deve conter no máximo 40 caracteres.',
                'uf.max' => 'Este campo deve conter no máximo 2 caracteres.',
                'uf.mix' => 'Este campo deve conter pelo menos 3 caracteres.',
                'email' => 'Este campo deve ser um e-mail válido.'
            ];

            $request->validate($regras, $feedback);
            Fornecedor::create($request->all());

            $msg = 'Cadastro realizado com sucesso!';
        }
        //Edição
        if($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update){
                $msg = 'Atualização realizada com sucesso!';
            } else {
                $msg = 'Não foi possível realizar a atualização!';
            }

            return redirect()->route('app.fornecedor.editar', ['id' => $request->id, 'msg' => $msg]);
        }

        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function editar($id, $msg = '')
    {
        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);

    }
}

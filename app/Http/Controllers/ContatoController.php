<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        // $contato = new SiteContato();

        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        //$contato->save();


        //$contato = new SiteContato();
        //$contato->create($request->all());
        //$contato->fill($request->all());
        //$contato->save();

        //print_r($contato->getAttributes());

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato teste', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        $request->validate(
            [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
            ],
            [

                'nome.min' => 'O Campo nome tem que ter pelo menos 3 caracteres.',
                'nome.max' => 'O Campo nome tem que ter no máxino 40 caracteres.',
                'nome.unique' => 'O Campo nome tem já consta em nossos registros. Escola outro nome.',

                'email.email' => 'O compo email é obrigatório e deve ser um email válido.',


                'required' => '0 campo :attribute deve ser preenchido.'
            ]
    );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}

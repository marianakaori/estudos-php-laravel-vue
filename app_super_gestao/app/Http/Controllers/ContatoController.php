<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivoContatos = MotivoContato::all();
        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivoContatos]);
    }

    public function salvar(Request $request)
    {
        //realizar as validações dos dados recebidos pelo request
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}

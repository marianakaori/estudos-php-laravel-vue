<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request)
    {
        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        // mensagens de feedback validação
        $feedback = [
            'usuario.email' => 'O campo usuário (email) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        // iniciar o Model user
        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name)) {
            echo 'Usuário existe';
        } else {
            echo 'Usuário não existe';
        }
    }
}

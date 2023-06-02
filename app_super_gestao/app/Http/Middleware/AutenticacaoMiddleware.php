<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {

        if ($metodo_autenticacao == 'padrao') {
            echo 'Verificar usuário e senha no banco de dados '. $perfil .' <br >';
        }
        
        if ($metodo_autenticacao == 'ldap') {
            echo 'Verificar usuário e senha no AD '. $perfil .' <br >';
        }

        if (false) {
            return $next($request);
        } else {
            return Response('autenticação');
        }
    }
}

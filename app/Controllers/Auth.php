<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Auth extends BaseController
{
    public function autenticar()
    {
        $usuarioModel = new UsuarioModel();

        $usuario = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $dadosUsuario = $usuarioModel->where('email', $usuario)->first();

        if ($dadosUsuario && $dadosUsuario['senha'] === $senha) {
            session()->set([
                'id' => $dadosUsuario['id'],
                'usuario' => $dadosUsuario['email'],
                'nome'=> $dadosUsuario['nome'],
                'logado' => true
            ]);

            return redirect()->to('/painel');
        }

        return redirect()->to('/login')->with('erro', 'Usuário ou senha inválidos');
    }

    public function sair()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

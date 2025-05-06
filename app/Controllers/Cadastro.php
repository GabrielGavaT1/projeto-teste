<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Cadastro extends BaseController
{
    public function index()
    {
        return view('cadastro');
    }

    public function salvar()
    {
        $usuarioModel = new UsuarioModel();

        $data = [
            'usuario' => $this->request->getPost('nome'),
            'email'   => $this->request->getPost('email'),
            'senha'   => $this->request->getPost('senha'), // sem hash para teste
        ];

        $usuarioModel->insert($data);

        return redirect()->to('/login')->with('sucesso', 'Usuário cadastrado com sucesso!');
    }
}

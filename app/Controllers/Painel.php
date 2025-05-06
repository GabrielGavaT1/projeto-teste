<?php 

namespace App\Controllers;

class Painel extends BaseController
{
    public function index()
    {
        // Verifica se o usuário está logado
        if (!session()->get('logado')) {
            return redirect()->to('/login')->with('erro', 'Você precisa estar logado');
        }

        return view('painel');
    }
}

?>
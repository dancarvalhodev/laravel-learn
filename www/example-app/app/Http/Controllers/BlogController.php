<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Service\UserService;

class BlogController extends Controller
{
    public function adicionar()
    {
        // VALIDAR DADOS
        // COMUNICAR COM O BANCO DE DADOS

        (new UserService())->createUsuario();

        return view('arroz');
    }

    public function remover()
    {
        return view('remover');
    }
}

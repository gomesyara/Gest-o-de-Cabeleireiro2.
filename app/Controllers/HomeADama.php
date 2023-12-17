<?php

namespace App\Controllers;

class HomeADama extends BaseController
{
    public function index()
    {
        return view('homeADama');
    }

    public function servicos()
    {
        return view('servicosADama');
    }

    public function promocoes()
    {
        return view('promocoesADama');
    }

    public function cadastrese()
    {
        return view('cadastreseADama');
    }

    public function informacoes()
    {
        return view('informacoesADama');
    }
}

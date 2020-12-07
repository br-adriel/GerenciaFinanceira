<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function cadastrar() {
      return view('cadastrar');
    }

    public function entrar() {
      return view('entrar');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
   	 	return view('usuarios', [
                'texto'=>'lista de cornos', 
                'checagem'=>true,
                'gados' => ['gado1', 'gado2', 'gado3', 'gado4']
                ]);
    }
}

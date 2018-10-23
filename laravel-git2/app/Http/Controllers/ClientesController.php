<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;


class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::get();

    	return view('clientes.lista', ['clientes' => $clientes]);
    }

 	public function novo()
    {
    	return view('clientes.formulario');
    }  

    public function salvar(Request $request)
    {
    	$cliente = new Cliente();
    	$cliente = $cliente->create($request->all());

    	\Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');

    	return Redirect('clientes/novo');

    } 

    public function editar($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.formulario', ['cliente' => $cliente]);
    }  
}

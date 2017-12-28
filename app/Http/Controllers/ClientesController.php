<?php

namespace youCollections\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use youCollections\Cliente;

class ClientesController extends Controller
{
   	public function index()
   	{
   	    $clientes = Cliente::get();
   		return view('clientes/lista', ['clientes' => $clientes]);
    }

    public function novo()
    {
        return view('clientes/formulario');
    }

    public function salvar(Request $request)
    {
        $cliente = new Cliente();
        $cliente = $cliente->create($request->all());
        /*metodo que cria uma variavel temporaria que será mostrada apenas na proxima vez que
        a view for carregada*/
        \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');
        return Redirect::to('/clientes/novo');
    }
}

<?php

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function cadastrarView(){
        return view('cadastrarCliente');
    }
    public function cadastrar(Request $request){
        Cliente::create(
            [
            'Nome' => $request->nome,
            'Email' => $request->Email,
            'Endereco' => $request->Endereco,
            'Bairro' => $request->Bairro,
            'Cep' => $request->Cep,
            'Cidade' => $request->Cidade,
            'Estado' => $request->Estado,
            ]
        );

    }

    function listarClientes(){
        return view('listarCliente', ['clientes' => Cliente::all()]);
    }
  
}








?>
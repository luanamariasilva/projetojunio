<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\User;


class EventController extends Controller
{
    public function Index(){
       
               return view('welcome');

    }

    public function Home(){
       
        $produtos = Produto::All();
       

        return view('home',  ['produtos'=> $produtos]);
    }

    public function Pesquisar (){
        return view('pesquisar');
    }

    public function Cadastro (){
    
        return view('cadastro');
    }

    public function CadastraProduto(){
    
        return view('cadastraproduto');
    }

    public function store(Request $request){
        $produto= new Produto;
       
        $produto -> name = $request -> name;
        $produto -> descricao = $request -> descricao;

        $produto-> save();

        return redirect('/home');
    }

    public function storelogalt (Request $request){

    $validatedData = $request->validate([
        'email' => 'required|email|unique:users,email' // Verifica se o email já existe na tabela 'users'
    ]);

    // Se passar na validação, pode continuar
    

    return redirect('/')->back()->with('success', 'Usuário cadastrado com sucesso.');
}

      

    public function storelog(Request $request){
        $user = new User;
       
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = $request -> password;

        $user-> save();

        return redirect('/home');
}

}

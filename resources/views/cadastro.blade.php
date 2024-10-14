@extends('templates.header')


@section('title' ,'Cadastro')

@section('content')

 
 <div class="container" id="cont_cadastro">
   <div id="font_cadastro"><h4>Cadastro</p></div>
   <hr>
  
   <form action="/cadastro" method="POST">
   @csrf

         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Nome Completo">
        </div>



      <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
        </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="password" placeholder="Senha de acesso">
          </div>
      </div>

      <div class="col-md-2 offset-md-10" id="bnt" >
                <button type="submit"  class="btn btn-primary"> Salvar </button>
                <a  class="btn btn-success" href="/">Sair</a>
            </div> 
  </form>
        
            
           
@endsection
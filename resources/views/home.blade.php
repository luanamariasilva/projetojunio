@extends('templates.header')

@section('title', 'Home')

@section('content')



<div class="container text-center" id="conte_home">

    <div>
        <h3 id="pg_home">Itens Cadastrados</h3>


    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Produtos</th>
            <th scope="col">Descrição</th>
            <th scope="col">Excluir</th>
          </tr>
         </thead>

       
    <tbody>
    @foreach($produtos as $produto)
        <tr>
            <td> {{$produto -> name}} </td>
            <td> {{$produto -> descricao}}</td>

           <form action="/cadastraproduto/{{$produto->id}}" method="POST"> 
            @csrf
            @method('DELETE')
              <td> <button type="submit" class="btn btn-danger">deleta</a></td>
           </form>
        </tr>
    @endforeach       
      </tbody>     
   
    </table>
    

          
    
        <div class="row">
            <div class="col-md-4 offset-md-8" >
                <a  class="btn btn-warning"  href="/cadastraproduto"> Cadastrar Produtos </a>
            <!--    <a  class="btn btn-primary"  href="/pesquisar"> Pesquisar </a> -->
                <a  class="btn btn-success" href="/">Sair</a>
            </div> 
            
        </div>  
    </div>
</div>

@endsection
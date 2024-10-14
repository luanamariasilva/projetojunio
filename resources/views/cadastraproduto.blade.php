
@extends('templates.header')

@section('title', 'Cadastro de Produtos')

@section('content')

<div class="container" id="cont_cadastrprduto">
   <div id="font_cadastro"><h4>Cadastra Produtos</p></div>
   <hr>
<form action="/cadastraproduto" method="POST">
    @csrf
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Categorias</label>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="cadegoria" id="cadegoria">
                    <option selected>Selecione... </option>
                    <option name="masculinas" value="masculinas">Masculinas</option>
                    <option name="femininas" value="femininas">Femininas</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="name" name="name">
           </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descreva o produto</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
            </div>

           <div class="col-md-3 offset-md-9" >
                <button type="submit" class="btn btn-success">Salvar</button>
                <a  class="btn btn-success" href="/">Sair</a>
            </div>
    </form>
</div>

        
              

  @endsection

@extends('templates.header')


@section('title' ,'Login de acesso')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-header text-center">
                Portal de Acesso
            </div>
            <div class="card-body">
                <div>

            <form action="/" method="POST">
@csrf                    
                    <fieldset>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Email</label>
                            <input type="text" id="disabledTextInput" name="email" class="form-control" placeholder="Email cadastrado">
                        </div>
                    
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label"> Senha</label>
                            <input type="password"  id="senha" name="senha" class="form-control" placeholder="Senha">
                        </div>
            
                    </fieldset>

                    </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
                <a href="/cadastro" class="btn btn-danger">Cadastrar</a>
            </div>
            </form>
        </div>
  </div>
@endsection


@extends('layout')
@section('conteudo')

    <div class="col-12 mb-3">
        <h2>Cadastrar Cliente</h2>
    </div>

    <form action="{{route('cadastrar_cliente') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    Nome: <input type="text" name="nome" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Email: <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Cpf: <input type="text" name="cpf" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Senha: <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    Endereço: <input type="text" name="endereco" class="form-control">
                </div>  
            </div>
            <div class="col-1">
                <div class="form-group">
                    Número: <input type="text" name="numero" class="form-control">
                </div>  
            </div>
            <div class="col-8">
                <div class="form-group">
                    Complemento: <input type="text" name="complemento" class="form-control">
                </div>  
            </div>
            <div class="col-4">
                <div class="form-group">
                    Cidade: <input type="text" name="cidade" class="form-control">
                </div>
            </div>
          <div class="col-4">
            <div class="form-group">
                Cep: <input type="text" name="cep" class="form-control">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
                Estado: <input type="text" name="estado" class="form-control">
            </div>
          </div>
    
        </div>
       
        <input type="submit" value="Cadastrar" class="btn btn-success btn-sm">

    </form>

@endsection
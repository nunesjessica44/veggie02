@extends('layout')

@section('scriptjs')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $(function(){
        //JQUERY ONLOAD -- ao carregar  página
        $("#cpf").mask("000.000.000-00");
        $("#cep").mask("00000-000");
    })
    
</script>

@endsection

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
                    Cpf: <input type="text" name="cpf" id="cpf" class="form-control">
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
                Cep: <input type="text" name="cep" id="cep" class="form-control">
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
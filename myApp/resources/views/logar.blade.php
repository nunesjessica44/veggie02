
@section('scriptjs')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $(function(){
        $("#cpf").mask("000.000.000-00");
    })
    
</script>

@extends("layout")
@section("conteudo")
      <div class="col-12" style="margin-bottom: 15%">
         <h2 class="mb-3">Logar no sistema</h2>

         <form action="{{ route('logar') }}" method="post">
              @csrf
              <div class="form-group">
                   Login
                   <input type="text" name="login" class="form-control" id="cpf" />
              </div>
              <div class="form-group">
                   Senha
                   <input type="password" name="senha" class="form-control" />
              </div>
              <input type="submit" value="Logar" class="btn btn-lg btn-primary">

         </form>
       </div>
@endsection
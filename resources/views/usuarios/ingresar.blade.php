@extends ('layoud')

@section ('contenido')
<h1 class="masthead-heading mb-0">Entrar</h1>
<form action="" method="post">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary form-control">Entrar</button>
        </div>
    </div>

</form>
@endsection
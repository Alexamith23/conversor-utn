@extends ('layoud')
@section ('contenido')
<h1 class="masthead-heading mb-0">Registro</h1>
<form action="" method="post">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
        </div>
    </div><br>
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
            <button type="submit" class="btn btn-primary form-control">Registrarme</button>
        </div>
    </div>

</form>
@endsection
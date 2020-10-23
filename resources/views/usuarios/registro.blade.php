@extends ('layoud')
@extends ('compartidos.navbar')
@section ('contenido')
<h1 class="masthead-heading mb-0">Registro</h1>
<hr>
<form action="" method="post">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="text" class="form-control input" id="nombre" name="nombre" placeholder="Nombre" required data-validation-required-message="Please enter a message.">
            <p class="help-block text-danger"></p>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="text" class="form-control input" id="apellido" name="apellido" placeholder="Apellido" required data-validation-required-message="Please enter a message.">
            <p class="help-block text-danger"></p>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="email" class="form-control input" id="correo" name="correo" placeholder="Correo electrónico" required data-validation-required-message="Please enter a message.">
            <p class="help-block text-danger"></p>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <input type="password" class="form-control input" id="password" name="password" placeholder="Contraseña" required data-validation-required-message="Please enter a message.">
            <p class="help-block text-danger"></p>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary form-control input">Registrarme</button>
            <p class="help-block text-danger"></p>
        </div>
    </div>

</form>
@endsection
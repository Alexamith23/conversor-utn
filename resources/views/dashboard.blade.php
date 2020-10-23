@extends ('layoud')
@extends ('compartidos.navbar_usuario')

@section ('contenido')
<h1 class="masthead-heading mb-0">Ingresa tu link</h1>
<form method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <textarea rows="2" class="form-control input" placeholder="https://www.youtube.com/watch?v=QkI-8FVwWso" id="introduccion" name="introduccion" required data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary btn-lg form-control input">Convertir</button>
        </div>
    </div>

</form>
@endsection
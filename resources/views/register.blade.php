@extends('layouts.layout-register')

@section('body')
<form method="post" action="{{ url('/save_data') }}">
    @csrf
    <div id="form column" class="container p-3">
        <h2> Registrarse </h2>
        <div class="p-5 pt-3">
            <label for="" class="col-6 pb-2"> Nombre  </label>
            <input type="text" class="my-2" name="name" require>
            <label for="" class="col-6 pb-2">Correo  </label>
            <input type="email" class="my-2" name="email" require>
            <label for="" class="col-6 pb-2"> Contraseña </label>
            <input type="password" class="my-2" name="password" require>
            <label for="" class="col-6 pb-2"> Confirmar Contraseña </label>
            <input type="password" class="my-2" name="confirm_password" require>
            <div class="row mt-4"><p>{{ $texto }}</p></div>
            <button type="submit" class="btn btn-primary col-4 mx-2">Registrarse</button>
            
        </div>
    </div>
</form>
@endsection

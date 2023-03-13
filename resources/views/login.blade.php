@extends('layouts.layout-login')

@section('body')
<form action="{{url('/login')}}" method="post">
    @csrf
    <div id="form column" class="container p-4">
        <h1> Iniciar Sesión </h1>
        <div class="p-5 pt-4">
                <label for="" class="col-6 pb-2" > Correo  </label>
                <input type="email" class="my-2" name="email" require>
                <label for="" class="col-6 pb-2 mt-3"> Contraseña </label>
                <input type="password" class="my-2" name="password" require>
                @if(session('texto'))
                <div class="row "><p>{{ session('texto') }}</p></div>
                @endif
                <div class="row pb-3"><a href="#">¿Olvido su contraseña?</a></div>
                <button type="submit" class="btn btn-primary col-4 mx-4">Enviar</button>
                <a href="/registro" type="submit" class="btn btn-primary col-4 mx-2"> Registrarse </a>
        </div>
    </div>
</form>
@endsection
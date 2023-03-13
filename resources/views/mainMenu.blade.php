

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>

@extends('layouts.navbar')

@section('body')

    <div class="container">
    <div class="d-flex justify-content-center"><p>Bienvenido {{ $user->username }}</p></div>
@foreach($posts as $post)

        <div class="d-flex justify-content-center z-index-0" style="z-index: -1;">
            <div class="card bg-info mb-4 mt-4 col-7 md-7">
                <div class="card-header">
                    <h3>{{ $post->title }} </h3>
                </div>
                <div class="card-body">
                    <p>{{ $post->text_post }}</p>
                    <h5> Autor:  {{ $post->getCreator->username }}</h5>
                    <h5> Fecha: {{ $post->created_at->format('d-m-Y H:i:s') }} </h5>
                    <div class="d-flex justify-content-end">
                        @if($post->user_id == $user->id)
                            <a href="/delete_post/{{ $post->id }}" class="btn btn-primary " style="margin-right: 5px"> Eliminar </a>
                        @endif
                        <a href="/answer/{{ $post->id }}/{{ $post->user_id }}" class="btn btn-primary"> Responder </a>
                    </div>
                </div>
            </div>
        </div>

@endforeach
@endsection

</body>
</html>

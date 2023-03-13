<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hilo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
@extends('layouts.navbar')
@section('body')

@if(session('post_info'))
    <div class="container">
        <div class="d-flex justify-content-center col-8">
            <div class=" mt-5 col-4 md-4">
                <h1> {{ session('post_info')->title }} </h1>
            </div>
        </div>
        <div class="d-flex justify-content-center col-12">
            <div class=" mb-4 mt-5 col-7 md-4">
                <p> {{ session('post_info')->text_post }}</p>
            </div>
        </div>

<form action="/save_comment/{{ session('post_info')->id }}" method="post">
    @csrf
        <div class="d-flex justify-content-center">
            <div class="mb-4 mt-4 col-7 md-7">
                <textarea class="form-control resizable-none h-100" id="exampleFormControlTextarea1" rows="3" placeholder="Respuesta de hilo" name="text"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-end col-9 mx-5 custom-container">
            <button class="btn btn-primary">Responder</button>
            
        </div>
    </div>  
    </form>
    @if(session('getAuthor'))
    @if(session('comments'))
        @foreach(session('comments') as $comment)
            @if($comment->post_id == session('post_info')->id)
                <div class="d-flex justify-content-center" style="z-index: -1;">
                        <div class="card bg-secondary mb-4 mt-4 col-7 md-7">
                            <div class="card-header">
                                <h3>{{ session('getAuthor')->getAuthor($comment->user_id) }}</h3>
                            </div>
                            <div class="card-body">
                                <p>{{ $comment->answer }}</p>
                                <h5> {{ $comment->created_at }}</h5>
                                <div class="d-flex justify-content-end">
                                    @if(session('id_user') == $comment->user_id)
                                        <a href="/delete_comment/{{ $comment->id }}/{{session('post_info')->id }}" class="btn btn-primary"> Eliminar </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
        @endforeach
    @endif
    @endif
@endif
@endsection
    </body>
</html>
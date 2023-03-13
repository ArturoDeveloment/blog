
@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Crear Hilo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

@section('body')
<form action="{{ url('/post') }}" method="post">
    @csrf
    <div class="container">
        <div class="d-flex justify-content-center col-8 mt-5">
            <div class="mb-4 mt-5 col-4 md-4">
                <div>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tí­tulo de hilo" name="titulo">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="mb-4 mt-4 col-7 md-7">
                <textarea class="form-control resizable-none h-100" id="exampleFormControlTextarea1" rows="3" placeholder="Texto de hilo" name="text-hilo"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-end col-9 mx-5 custom-container">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
</form>
@endsection

</body>
</html>
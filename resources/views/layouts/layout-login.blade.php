<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Iniciar sesion </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('blog.png') }}" type="image/x-icon">
    <style>

        body{
            background-color: #DCDCDC;
            display: flex;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
        }

        form{
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: white ;
            border: 3px solid black;
            text-align: center;
            height: 430px;
            width: 500px;
        }

        h1{
            color: #264EF1;
        }
    </style>
</head>
<body>
    @yield('body')
</body>
</html>
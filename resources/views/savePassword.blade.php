<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperacion de contraseña</title>
    <link rel="shortcut icon" href="{{ asset('blog.png') }}" type="image/x-icon">
    <style>
        .container {
    width: 40%;
    margin: 0 auto;
    background-color: #f7f7f7;
    color: #757575;
    font-family: 'Raleway', sans-serif;
    text-align: left;
    padding: 30px;
    margin-top: 10%;
}
h2 {
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 10px;
}
.container p {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 20px;
}
.regisFrm input[type="text"], .regisFrm input[type="email"], .regisFrm input[type="password"] {
    width: 94.5%;
    padding: 10px;
    margin: 10px 0;
    outline: none;
    color: #000;
    font-weight: 500;
    font-family: 'Roboto', sans-serif;
}
.send-button {
    text-align: center;
    margin-top: 20px;
}
.send-button input[type="submit"] {
    padding: 10px 0;
    width: 60%;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 500;
    border: none;
    outline: none;
    color: #FFF;
    background-color: #2196F3;
    cursor: pointer;
}
.send-button input[type="submit"]:hover {
    background-color: #055d54;
}
a.logout{float: right;}
p.success{color:#34A853;}
p.error{color:#EA4335;}
    </style>
</head>
<body>



    <div class="container">
    <h2>Digite su correo</h2>
        <div class="regisFrm">
            <form action="/request" method="get">
                <input type="email" name="email" placeholder="EMAIL" required="">
                <div class="send-button">
                    <input type="submit" name="forgotSubmit" value="enviar">
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>
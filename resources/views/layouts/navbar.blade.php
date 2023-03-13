<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-size:16px;
        }

        header{
            background: #000000;
            display: flex;
            position: fixed;
            top: 0px;
            justify-content: space-between;
            align-items: center; 
            height: 8%;
            padding: 5px;
            width: 100%;
            z-index: 5;
        }

        .enlaces li, .logout, .logout2{
            list-style-type: none;
            text-decoration:none;
        }

        .navbar li{
            display: inline-block; 
            padding: 40px;
            padding-top: 55px;
        }

        .logout{
            align: right;
            padding-right: 40px;
            padding-top: 25px;
        }
        .logout{
            align: right;
            padding-left: 40px;
            
        }

        .logout li{
            display: inline-block; 
            padding: 20px
        }

        .enlaces li a, .logout a, .logout2 a{
            font-size: 700;
            color: white;
            text-decoration: none;
        }

        .container{
            margin-top: 7%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="enlaces">
                <li><a href="/mainMenu">Menú Principal</a></li>
                <li><a href="/mainMenu">Dashboard</a></li>
                <li><a href="/post">Crear hilo</a></li>
            </ul>
        </nav>
        <ul class="logout">
            <li><a href="/">Logout</a></li>
        </ul>
    </header>
    @yield('body')
</body>
</html>
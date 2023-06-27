<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Benvenuto in Laravel - Home</title>
    <style>
        body {
            background: #222;
            font-family: sans-serif;
            color: white;
        }

        * {
            box-sizing: border-box;
            padding: 0px;
            margin: 0px;
        }

        a {
            color: aquamarine;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h1>Laravel 9</h1>
    <p>Hello Laravel World</p>
    <p>{{$messaggio}}</p>
    <p>Il numero fortunato di oggi è: {{$numero}}</p>
    <p>
        Il numero, moltiplicato per 3 => 
        @php
        echo 3 * $numero;
        @endphp
    </p>
    <a href="/about">Vai ad about</a>
    
</body>
</html>
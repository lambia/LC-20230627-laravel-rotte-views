<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo', "Laravel HelloWorld")</title>
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

        header, footer {
            background: white;
            width: 100%;
            color: black;
            padding: 1rem;
        }

        h1 {
            color: green;
        }

        header img.logo {
            height: 1rem;
        }

        main {
            padding: 1rem;
        }
    </style>
    {{-- @yield('style') --}}
</head>
<body>

    @include("partials.header")

    <main>
        @yield('content')
    </main>

    @include("partials.footer")
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Benvenuto in Laravel - About</title>
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

    <h1>About us</h1>
    <p>Benvenuta, {{$classe}}</p>    
    <p>La materia attuale è: {{$avanzamento}}</p>

    {{--
    @if (count($programma) === 1)
    Il programma è fortemente specializzato
    @elseif (count($programma) > 1)
    <div>Il programma comprende skills trasversali</div>
    @else
    Il programma...
    @endif
    --}}

    @if (count($programma))
    <h2>Materie</h2>
    <ul>
        @foreach ($programma as $materia)
            <li>{{ $materia }}</li>
        @endforeach
    </ul>
    @else
    <h2>Nessuna materia trovata</h2>
    @endif

    <h2>Studenti</h2>
    {{--
    <ul>
        @foreach ($studenti as $studente)
            @if ($loop->last)
                <li style="color:chartreuse;">{{ $studente["nome"] }} {{ $studente["cognome"]}}</li>
            @else
                <li>{{ $studente["nome"] }} {{ $studente["cognome"]}}</li>
            @endif
        @endforeach
    </ul>
    --}}

    <ul>
        @forelse ($studenti as $studente)
            <li>{{ $studente["nome"] }} {{ $studente["cognome"]}}</li>
        @empty
            <li>Nessuno studente</li>
        @endforelse
    </ul>
    
    <a href="/">Torna alla Home</a>

</body>
</html>
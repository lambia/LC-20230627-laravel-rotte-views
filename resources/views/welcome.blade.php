{{-- Estende il layout di base --}}
@extends('layouts.app')

{{-- Definisce il contenuto da scrivere nello slot/placeholder chiamato "content" --}}
@section('content')
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
    {{-- <a href="/about-us">Vai ad about</a> --}}
    <a href="{{route('about')}}">Vai ad about</a>
@endsection

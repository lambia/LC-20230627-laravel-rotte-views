<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $messaggio = "Benvenuta Classe #95";
    $numero = 42;

    return view('welcome', compact('messaggio', 'numero') );
});

Route::get('/about', function () {

    $data = [
        "classe" => "Classe #95",
        "avanzamento" => "Laravel",
        "programma" => [
            "html",
            "css",
            "javascript",
            "vue",
            "php",
            "laravel"
        ],
        "studenti" => [
            [
                "nome" => "Damiano",
                "cognome" => "Laganà"
            ],
            [
                "nome" => "Gabriele",
                "cognome" => "Rizzo"
            ],
            [
                "nome" => "Francesco",
                "cognome" => "Meloni"
            ]
        ]
    ];

    return view('about', $data);
});
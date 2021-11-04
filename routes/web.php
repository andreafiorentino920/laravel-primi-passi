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
    $studente = [
        "nome" => "Andrea",
        "cognome" => "Fiorentino",
        "eta" => "22",
        "data" => "13/02/1999",
        "scuola" => "Boolean"
    ];

    return view('index', $studente);
});


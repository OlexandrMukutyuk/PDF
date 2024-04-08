<?php

use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pdf', function () {

    Browsershot::url('http://127.0.0.1:8000/getPDF/1')->save('example.pdf');
    $pdf = "example.pdf";
    return response()->file("example.pdf");
});

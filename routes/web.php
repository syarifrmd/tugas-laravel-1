<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/home', [PageController::class, 'home'] );
Route::get('/login', [PageController::class, 'login'] );
Route::get('/datatransaksi', [PageController::class, 'datatransaksi'] );
Route::get('/databarang', [PageController::class, 'databarang'] );
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GreetingController;
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

Route::get('/provasingola', function () {
    echo "prova";
    $x=3;
    $y=4;
    echo $x+$y;
    echo "<hr>";
    echo "<h3>Ciao</h3>";
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/prova', function () {
    return view('prova');
});

Route::post('/prova', function () {
    echo "ricevuta post!";
});

Route::get('/about/due', function () {
    return view('about');
});

Route::get('/neutro', [Controller::class, 'index']);
Route::get('/sayciao', [GreetingController::class, 'sayCiao']);
Route::get('/sayhello', [GreetingController::class, 'sayHello']);
Route::get('/saybuonasera', [GreetingController::class, 'sayBuonasera']);
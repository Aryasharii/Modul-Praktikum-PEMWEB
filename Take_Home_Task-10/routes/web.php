<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('login');
})->name('login');

Route::get('/index', function () {
    return view('index');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $validUsername = "arya@gmail.com";
    $validPassword = "password123"; 

    $username = $request->input('username');
    $password = $request->input('password');

    // Validasi login
    if ($username === $validUsername && $password === $validPassword) {
        return redirect()->route('index');
    } else {
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
})->name('login.submit');

Route::get('/index', function () {
    return view('index');
})->name('index');



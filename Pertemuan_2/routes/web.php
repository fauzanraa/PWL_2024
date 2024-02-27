<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});
// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya '.$name;
// });
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId. " Komentar ke-: ".$commentId;
});
Route::get('/article/{id}', function ($id) {
    return 'Halaman Artikel dengan ID {'.$id.'}';
});
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});
// Route::get('/user/profile', function () {
//     //;
// })->name('profile');
// Route::get(
//     '/user/profile', 
//     [UserProfileController::class, 'show']
// )->name('profile');
// //Generating URLs...
// $url = route('profile');
// //Generating Redirects...
// return redirect()->route('profile');
Route::view('/welcome', '/welcome');
Route::view('/welcome', '/welcome', ['name' => 'Taylor']);

Route::get('/test', function () {
    $hello = 'Hello World';
    var_dump($hello);
    die();
    return $hello;
});

// Tugas
Route::get('/mahasiswa', function(){
    $arrMahasiswa = ["
    Rahmat Hidayat", 
    "Diki Feb", 
    "Mutafakur A", 
    "Dika"];
    return view('polinema.mahasiswa', ['polinema' => $arrMahasiswa]);
}); 
Route::get('/dosen', function(){
    $arrDosen = [
    "Yoppy Yuhasnawa", 
    "Bani Handoko", 
    "Kadek Suarjana", 
    "Mungki Astiningrum"];
    return view('polinema.dosen', ['dosenPolinema' => $arrDosen]);
});

<?php

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
Route::get('/songs', function () {
    return "Songs";
});

Route::get('/songs', function () {
    return view('songs');
});

Route::get('/songs', function () {
    $song = new Song();
    $song->setTitle('With You');
    return view('songs', [ 'song' => $song ]);
});
Route::get('/songs', function () {
  $song1 = new Song();
  $song1->setTitle("Stan");
  $song1->setArtist("Eminem");

  $song2 = new Song();
  $song2->setTitle("Nothing Else Matters");
  $song2->setArtist("Metallica");

  $song3 = new Song();
  $song3->setTitle("With You");
  $song3->setArtist("A P Dhillon");

  return view('songs', [ 'songs' => [ $song1, $song2, $song3 ] ]); 
});

 Route::get('/veggies/baigan', function () {
    return 'Baigan';
});

Route::get('/veggies/{veggieName}', function (string $veggiename) {
        return $veggiename;
});

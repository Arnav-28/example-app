<?php

use Illuminate\Support\Facades\Route;
use App\Models\Song;
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
Route::get('/veggies', function () {
    return view('veggies');
});

Route::get('/veggies/{veggieName}', function (string $veggieName){
	return $veggieName;
})->whereIn('veggieName',['baigan','bhindi','aaloo','gobhi']);

Route::get('/songs_static', function () {
    return view('songs_static', [ 'songs' => Song::all() ]);
});

Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});

/*
Route::get('/songs', function () {
    $song = new Song();
    $song->setTitle('With You');
    return view('songs', [ 'song' => $song ]);

});
Route::get('/songs', function () {
    return view('songs');
});

Route::get('/songs', function () {
    return "Songs";
});

*/


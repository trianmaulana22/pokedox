<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PokedexController::class, 'index']);
Route::get('/pokemon/{id}', [PokedexController::class, 'show']);
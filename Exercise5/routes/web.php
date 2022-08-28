<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
Route::get('/create', function () {
    return view('create');
});
Route::get('/kakaka', function () {
    return view('welcome');
});



Route::get("/", [ItemController::class, "index"]);

Route::get("/add", [ItemController::class, "add"]);
Route::get('/edit/{id}', [ItemController::class, 'edit']);
Route::get('/delete/{id}',[ItemController::class, 'delete']);



Route::post('/store', [ItemController::class, "store"]);
Route::post('/update',[ItemController::class,'update']);

//tes


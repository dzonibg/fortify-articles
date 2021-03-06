<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
    return view('home');
});

Route::view('/update', 'auth.update');


Route::get("/articles", [ArticleController::class, "index"]);
Route::get("/article/create", [ArticleController::class, "create"])->middleware("auth");
Route::get("/article/{article}", [ArticleController::class, "show"]);
Route::post("/article", [ArticleController::class, "store"])->middleware("auth");
Route::delete("/article/{article}", [ArticleController::class, "destroy"]);

Route::get("/articles/css", [ArticleController::class, "cssFeed"]);

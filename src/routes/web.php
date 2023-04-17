<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\StudentController;

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
    return view('index', [
        'definitions' => App\Models\Definition::all()
    ]);
});

Route::resource('definitions', DefinitionController::class);
Route::resource('authors', AuthorController::class);

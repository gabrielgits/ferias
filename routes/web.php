<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [ContatoController::class, 'index'])->name('contatos.index');
Route::post('/contatos', [ContatoController::class, 'store'])->name('contatos.store');
Route::get('/contatos/{contato}/edit', [ContatoController::class, 'edit'])->name('contatos.edit');
Route::put('/contatos/{contato}', [ContatoController::class, 'update'])->name('contatos.update');
Route::get('/contatos/{contato}', [ContatoController::class, 'destroy'])->name('contatos.destroy');


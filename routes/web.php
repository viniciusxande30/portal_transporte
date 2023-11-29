<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
//     return view('site');
// });

Route::get('/', [Controller::class, 'homeIndex'])->name('homeIndex');
Route::get('/sobre-nos', [Controller::class, 'aboutUs'])->name('aboutUs');
Route::get('/origem-e-destino', [Controller::class, 'routes'])->name('routes');
Route::get('/transportadoras', [Controller::class, 'companies'])->name('companies');
Route::get('/cotacao-de-frete', [Controller::class, 'cotation'])->name('cotation');
Route::get('/cadastro', [Controller::class, 'register'])->name('register');
Route::get('transportadoras/{origin}/{destination}',[Controller::class,'transportadorasCotacao'])->name('transportadorasCotacao');
Route::get('transportadoras/{companies}',[Controller::class,'companiesPerfil'])->name('companiesPerfil');
Route::get('/cotacao-enviada',[Controller::class,'sendQuotation'])->name('sendQuotation');
Route::post('cotacao',[Controller::class,'quotationApi'])->name('quotationApi');
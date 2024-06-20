<?php

use Illuminate\Support\Facades\Route;

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

// meus controllers para chamr as rotas 
use App\Http\Controllers\CaminhosController;
use App\Http\Controllers\PautaController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PautasController;
use App\Http\Controllers\IntensivoController;
//----------------------------------------------------------------------------------------------------------------------


// Rotas do controller caminhoController
Route::get('/',[CaminhosController::class,'index']);
Route::get('/cadastrar',[CaminhosController::class,'create']);
Route::post('/cadastrados',[CaminhosController::class,'store']);
Route::get('/usuarios',[CaminhosController::class,'usuarios']);
Route::get('/edit_aluno/{id}',[CaminhosController::class,'edit']);
Route::post('/atualizar_aluno/{id}',[CaminhosController::class,'update']);
Route::delete('/usuarios/{id}',[CaminhosController::class,'destroy']);
//Route::get('/edit/{id}',[CaminhosController::class,'edit']);

//----------------------------------------------------------------------------------------------------------------------



// rotas de criar pautas 
Route::get('/minhas_pautas',[PautaController::class,'index_pautas']);
Route::get('/pautas',[PautaController::class,'create_pautas']);
Route::post('/criar',[PautaController ::class,'storepauta']);
Route::delete('/pautas_apagar/{id}',[PautasController::class,'destroy_pautas']);
Route::get('/gerar-pdf', [PDFController::class, 'gerarPDF'])->name('gerar.pdf');
Route::get('/edit_pauta/{id}',[PautasController::class,'editar']);
Route::post('/atualizar_pauta/{id}',[PautasController::class,'update']);
//----------------------------------------------------------------------------------------------------------------------







//Rotas para trabalhar com os alunos do curso intensivo
Route::delete('/apagar/{id}',[IntensivoController::class,'destroy_I']);
Route::post('/add_I',[IntensivoController::class,'store_pautas_I']);

//----------------------------------------------------------------------------------------------------------------------

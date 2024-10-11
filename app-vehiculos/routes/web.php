<?php
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;
/*Pagina raiz*/
Route::get('/', function () {
    return view('welcome');
});

//metodos a realizar
Route::get('/registrar', [TodosController::class, 'index'])->name('todos');
//Ruta para almacenar mis datos a la base de datos
Route::post('/registrar', [TodosController::class, 'store'])->name('todos');
//Ruta para ver los registros
Route::get('/registros', [TodosController::class, 'log'])->name('todos-log');
//Ruta para editar los registros de la base de datos
Route::get('/editar/{id}', [TodosController::class, 'show'])->name('todos-edit');
//Ruta para reescribir los datos antiguos por los recien editados
Route::patch('/actualizar/{id}', [TodosController::class, 'update'])->name('todos-update');
//Ruta para eliminar registros
Route::delete('/eliminar/{id}', [TodosController::class, 'destroy'])->name('todos-destroy');
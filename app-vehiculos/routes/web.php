<?php
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;
/*Pagina raiz*/
Route::get('/', function () {
    return view('welcome');
});
//metodos a realizar
Route::get('/tareas', [TodosController::class, 'index'])->name('todos');
//Ruta para almacenar mis datos a la base de datos
Route::post('/tareas', [TodosController::class, 'store'])->name('todos');
//Ruta para editar los registros de la base de datos
Route::get('/tareas/{id}', [TodosController::class, 'show'])->name('todos-edit');
//Ruta para reescribir los datos antiguos por los recien editados
Route::patch('/tareas/{id}', [TodosController::class, 'update'])->name('todos-update');
//Ruta para eliminar registros
Route::delete('/tareas/{id}', [TodosController::class, 'destroy'])->name('todos-destroy');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Rota principal redireciona para a lista de tarefas
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Agrupa todas as rotas de tarefas usando um Resource Controller
Route::resource('tasks', TaskController::class);
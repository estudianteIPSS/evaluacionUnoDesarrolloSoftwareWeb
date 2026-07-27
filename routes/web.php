<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// 1. Listar todos los proyectos
Route::get('/proyectos', [ProjectController::class, 'index'])->name('projects.index');

// 2. Agregar Proyecto
Route::get('/proyectos/crear', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/proyectos', [ProjectController::class, 'store'])->name('projects.store');

// 3. Eliminar proyecto por su Id
Route::get('/proyectos/eliminar', [ProjectController::class, 'destroyView'])->name('projects.delete.view');
Route::delete('/proyectos/{id?}', [ProjectController::class, 'destroy'])->name('projects.destroy');

// 4. Actualizar proyecto por su id
Route::get('/proyectos/{id}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/proyectos/{id}', [ProjectController::class, 'update'])->name('projects.update');

// 5. Obtener un proyecto por su id
Route::get('/proyectos/buscar/{id?}', [ProjectController::class, 'show'])->name('projects.show');
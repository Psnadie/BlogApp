<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'index'])->name('main.base');

Route::get('blog', [BlogController::class, 'index']) -> name('blog.index');
Route::get('blog/create', [BlogController::class, 'create']) -> name('blog.create');
Route::get('blog/{id}', [BlogController::class, 'show']) -> name('blog.show');
Route::post('blog', [BlogController::class, 'store']) -> name('blog.store');
Route::get('blog/{id}/edit', [BlogController::class, 'edit']) -> name('blog.edit');
Route::put('blog/{id}', [BlogController::class, 'update']) -> name('blog.update');
Route::delete('blog/{id}', [BlogController::class, 'destroy']) -> name('blog.destroy');

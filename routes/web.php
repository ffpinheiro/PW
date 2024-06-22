<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
Use App\Http\Controllers\ProdutoController;
Use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');   
});

require __DIR__.'/auth.php';

Route::get('/',[SiteController::class,'index'])->name('site.index');
Route::get('/sobre',[SiteController::class,'sobre'])->name('site.sobre');
Route::get('/produto',[ProdutoController::class,'index'])->name('produto.listar');
Route::get('/produto/create',[ProdutoController::class,'create'])->name('produto.create');
Route::POST('/produto/create',[ProdutoController::class,'store'])->name('produto.store');
Route::get('/produto/atendimento/{produto}',[ProdutoController::class,'atendimento'])->name('produto.atendimento');
Route::get('/produto/alterar/{produto}',[ProdutoController::class,'alterar'])->name('produto.alterar');
Route::put('/produto/update/{produto}',[ProdutoController::class,'update'])->name('produto.update');
Route::get('/produto/delete/{produto}',[ProdutoController::class,'delete'])->name('produto.delete');
Route::get('/produto/sair',[AuthenticatedSessionController::class,'destroy'])->name('produto.sair');
Route::get('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');
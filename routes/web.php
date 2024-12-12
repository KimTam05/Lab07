<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KNTKhoaController;
use App\Http\Controllers\KNTMonhocController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(["prefix"=> "khoa"], function () {
    Route::get("/", [KNTKhoaController::class,"KNTindex"])->name("KNTkhoa.index");
    Route::get('/detail/{makh}',[KNTKhoaController::class,'KNTdetail'])->name('KNTkhoa.detail');
    Route::get('/create',[KNTKhoaController::class,'KNTcreate'])->name('KNTkhoa.create');
    Route::post('/create',[KNTKhoaController::class,'KNTcreateSubmit'])->name('KNTkhoa.createSubmit');
    Route::get('/edit/{makh}',[KNTKhoaController::class,'KNTedit'])->name('KNTkhoa.edit');
    Route::post('/edit/{makh}',[KNTKhoaController::class,'KNTeditSubmit'])->name('KNTkhoa.editSubmit');
    Route::get('/delete/{makh}',[KNTKhoaController::class,'KNTdeleteSubmit'])->name('KNTkhoa.deleteSubmit');
});

Route::group(['prefix'=> 'monhoc'], function () {
    Route::get('/', [KNTMonhocController::class, 'KNTList'])->name('KNTMonhoc.list');
    Route::get('/create', [KNTMonhocController::class,'KNTCreate'])->name('KNTMonhoc.create');
    Route::post('/create', [KNTMonhocController::class,'KNTCreateSubmit']);
    Route::get('/edit/{id}',[KNTMonhocController::class,'KNTEdit'])->name('KNTMonhoc.edit');
    Route::post('/edit/{id}',[KNTMonhocController::class,'KNTEditSubmit']);
    Route::get('/delete/{id}', [KNTMonhocController::class,'KNTDelete'])->name('KNTMonhoc.delete');
    Route::get('/detail/{id}', [KNTMonhocController::class,'KNTDetail'])->name('KNTMonhoc.detail');
});
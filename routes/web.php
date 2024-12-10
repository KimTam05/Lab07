<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KNTKhoaController;

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


Route::get("/khoa", [KNTKhoaController::class,"KNTindex"])->name("KNTkhoa.index");
Route::get('/khoa/detail/{makh}',[KNTKhoaController::class,'KNTdetail'])->name('KNTkhoa.detail');
Route::get('khoa/create',[KNTKhoaController::class,'KNTcreate'])->name('KNTkhoa.create');
Route::post('/khoa/create',[KNTKhoaController::class,'KNTcreateSubmit'])->name('KNTkhoa.createSubmit');
Route::get('/khoa/edit/{makh}',[KNTKhoaController::class,'KNTedit'])->name('KNTkhoa.edit');
Route::post('/khoa/edit/{makh}',[KNTKhoaController::class,'KNTeditSubmit'])->name('KNTkhoa.editSubmit');
Route::get('/khoa/delete/{makh}',[KNTKhoaController::class,'KNTdeleteSubmit'])->name('KNTkhoa.deleteSubmit');
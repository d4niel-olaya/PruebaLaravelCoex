<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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
//     return view('inicio', [UsuariosController::class, 'index']);
// });


Route::controller(UsuariosController::class)->group(function(){
    Route::get('/inicio', 'show');
    Route::post('create', 'store')->name('crearUsuario');
    Route::put('update', 'updateUser')->name('editUser');
    Route::delete('deleted', 'deletedUser')->name('delUser');
});





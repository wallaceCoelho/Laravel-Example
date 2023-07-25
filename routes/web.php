<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::middleware('auth')->group(function () {
    // Rotas protegidas pelo middleware 'auth' aqui
});

Route::controller(UserController::class)->group(function (){
    Route::get('/', 'Login');
    Route::get('/Register', 'Register');
    Route::post('/LoginUser', 'LoginUser');
    Route::post('/NewRegister', 'NewRegister');
});




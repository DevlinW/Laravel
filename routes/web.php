<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FileUpdateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/Home', function () {
    return view('home_cust');
})->middleware('login');

Route::get('/Admin', function () {
    return view('home_admin');
})->middleware('login');

Route::get('/register', function(){
    return view('register');
});

Route::get('/login', function(){
    return view('login');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/AboutUs', function () {
    return view('about_us');
});

Route::get('/Product', function () {
    return view('product_cust');
})->middleware('login');

Route::get('/Product/Admin', function () {
    return view('product_admin');
})->middleware('login');

Route::get('/edit-account', function () {
    return view('edit_account');
})->middleware('login');


Route::get('/edit-account', [UserController::class, 'editAccount']);


Route::get('/Product/Add', [FileUploadController::class, 'fileUpload'])->middleware('login');
Route::post('/Product/Add', [FileUploadController::class, 'prosesFileUpload']);

Route::get('/Product/Update', [FileUpdateController::class, 'fileUpdate'])->middleware('login');
Route::post('/Product/Update', [FileUpdateController::class, 'prosesFileUpdate']);

Route::get('/Transaction', function () {
    return view('transaction');
})->middleware('login');

Route::get('/edit-account/{id}/edit', [UserController::class, 'edit']);
Route::put('/edit-account/{id}', [UserController::class, 'update']);

Route::delete('/delete-account/{id}', [UserController::class, 'destroy']);
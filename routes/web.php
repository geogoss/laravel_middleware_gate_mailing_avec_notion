<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('/article', ArticleController::class);
Route::resource('/role', RoleController::class);

Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/delete/{id}', [UserController::class, 'destroy']);

Route::get('/admin', function () {
    $role = Role::all();
    $users = User::all();
    return view('pages.admin', compact('users', 'role'));
})->middleware(['auth', 'admin']);


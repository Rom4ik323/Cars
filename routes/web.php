<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutoController;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Cars;
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

Route::get('/park', function () {
    return view('park');
});

Route::get('/usl', function () {
    return view('usl');
});




Route::post('/', function () {
    $cars = DB::table('cars')->get();
    return view('home', compact('car'));
});


Route::get('/cars/{car}', function ($id) {
    $car = DB::table('cars')->find($id);
    return view('car', compact('car'));
})->name('car');


Route::get('/create', [CarsController::class, 'create']);
Route::post('/', [CarsController::class, 'store']);

Route::middleware(['admin'])->group(function () {

    Route::get('/adminpanel', [AdminController::class, 'index'])->name('admin.panel');
    Route::delete('/adminpanel/delete/{orders}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/adminpanel/auto', [AutoController::class, 'index'])->name('admin.panel.auto');

    Route::get('/adminpanel/auto/store', [AutoController::class, 'storeAuto'])->name('admin.panel.auto.store');
    Route::post('success', [AutoController::class, 'store'])->name('admin.panel.auto.store');
    Route::get('/auto/edit/{id}', [AutoController::class, 'editAuto'])->name('admin.edit');
    Route::post('/auto/edit/{id}', [AutoController::class, 'edit'])->name('admin.edit.submit');
    Route::delete('/destroy/{auto}', [AutoController::class, 'destroy'])->name('admin.destroy.auto');

});

Route::get('register', [RegisterController::class, 'create'])->name('register.create');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [RegisterController::class, 'loginform'])->name('register.loginform');
Route::post('login', [RegisterController::class, 'login'])->name('register.login');

Route::get('/logout', [RegisterController::class, 'logout'])->name('register.logout');


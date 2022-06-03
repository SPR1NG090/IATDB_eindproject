<?php

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
//op de blok
//authenticie vereising van de routes over de pagina
Route::middleware(['auth'])->group(function(){
    Route::get('/product/create', [\App\Http\Controllers\ProductController::class,'create']);
    Route::post('/product', [\App\Http\Controllers\ProductController::class,'store']);

    Route::post('/products/{id}/request', [\App\Http\Controllers\ProductController::class, 'requestLentProduct']);
    Route::delete('/products/{id}/return', [\App\Http\Controllers\ProductController::class, 'returnLentProduct']);
    Route::get('/product', [\App\Http\Controllers\ProductController::class,'index'])->middleware(['auth']);
    Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class,'show']);
    Route::get('/', [\App\Http\Controllers\ProductController::class,'index'])->middleware(['auth']);

    Route::get('/reviews/create{id}', [\App\Http\Controllers\ReviewController::class, 'create']);
    Route::post('/reviews', [\App\Http\Controllers\ReviewController::class, "store"]);

    
    
});


//weergeven gebruiker
Route::get('/profile/{name}', [\App\Http\Controllers\UserController::class,'show']);

//admin vereiste voor het navigeren naar create pagina
Route::middleware(['auth', 'admin'])->group(function(){
    Route::post('/profile/{name}/block', [\App\Http\Controllers\UserController::class, 'block'])->name('user.block');

    Route::delete('/products/{id}', [\App\Http\Controllers\ProductController::class, 'destroy']);
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

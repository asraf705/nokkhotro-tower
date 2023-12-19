<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ContactsController;


/*
|--------------------------------------------------------------------------
| WeApp\Http\Controllers\CategoryController
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio');
Route::get('/single-portfolio/{title}',[HomeController::class,'singlePortfolio'])->name('single.portfolio');
Route::get('/category-wise-portfolio/{categoryId}',[HomeController::class,'categoryWisePortfolio'])->name('category.wise.portfolio');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resources(['categories'=>CategoryController::class]);
    Route::resources(['portfolios'=>PortfolioController::class]);
    Route::resources(['testimonials'=>TestimonialsController::class]);
    Route::resources(['teams'=>TeamsController::class]);
    Route::resources(['contacts'=>ContactsController::class]);


});

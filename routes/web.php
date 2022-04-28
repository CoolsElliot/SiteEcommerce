<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GraphiqueController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/back', [BackofficeController::class, 'index'])->name('back');
Route::get('/back/articles/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/back/cart/cart', [CartController::class, 'index'])->name('cart');
Route::get('/back/contact/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/back/footer/footer', [FooterController::class, 'index'])->name('footer');
Route::get('/back/header/header', [HeaderController::class, 'index'])->name('header');
Route::get('/back/likes/likes', [LikeController::class, 'index'])->name('likes');
Route::get('/back/nav/nav', [NavController::class, 'index'])->name('nav');
Route::get('/back/tables/tables', [TableController::class, 'index'])->name('tables');
Route::get('/back/graphiques/graphiques', [GraphiqueController::class, 'index'])->name('graphiques');
Route::get('/back/pages/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/back/pages/error', [ErrorController::class, 'index'])->name('error');
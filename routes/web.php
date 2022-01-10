<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashbordController;
use Illuminate\Mail\Mailable;
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
/* ==========Route pour gerer le form de contact========= */
Route::get('/', [LandingPageController::class, 'showForm']);
Route::post('/', [LandingPageController::class, 'storeForm'])->name('contact.store');

/* ==========Route pour gerer Dashbord========= */
Route::get('/dashbord', [DashbordController::class, 'ListeCont']);
Route::get('/email-details/{id}', [DashbordController::class, 'readmail']);
Route::get('/repondre-mail/{id}', [DashbordController::class, 'RepondreMail']);
Route::post('/repondre-mail', [DashbordController::class, 'repondre'])->name('repondre.store');
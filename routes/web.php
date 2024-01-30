<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevensController;
use App\Http\Controllers\BoekController;
use App\Http\Controllers\DownloadDoc;
use App\Http\Controllers\InspiratiekaartenController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Mollie\Laravel\Facades\Mollie;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aanbod/levens', [LevensController::class, 'index'])->name('levens');
Route::get('/aanbod/inspiratiekaarten', [InspiratiekaartenController::class, 'index'])->name('inspiratiekaarten');
Route::get('/aanbod/inspiratiekaarten/download', [InspiratiekaartenController::class, 'download'])->name('download-instruction');
Route::get('/aanbod/boek', [BoekController::class, 'index'])->name('boek');
Route::get('/team', [\App\Http\Controllers\TeamController::class, 'index'])->name('team');
Route::get('/inspiratie', [\App\Http\Controllers\InspiratieController::class, 'index'])->name('inspiratie');
Route::get('/inspiratie/download-form/{slug}', [\App\Http\Controllers\InspiratieController::class, 'download'])->name('download-form');
Route::get('/getuigenissen', [\App\Http\Controllers\GetuigenissenController::class, 'index'])->name('getuigenissen');
Route::get('/aanbod/verandering', [\App\Http\Controllers\VeranderingController::class, 'index'])->name('verandering');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/checkout', [DownloadDoc::class, 'index'])->name('checkout');
Route::get('/success', [DownloadDoc::class, 'success'])->name('success');

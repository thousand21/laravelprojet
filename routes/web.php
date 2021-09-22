<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\InfoFooterController;
use App\Http\Controllers\PortfolioController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Header;
use App\Models\InfoFooter;
use App\Models\Portfolio;
use Illuminate\Routing\Route as RoutingRoute;
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
    $header = Header::all();
    $portfolio = Portfolio::all();
    $about = About::all();
    $footer = InfoFooter::all();
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.pages.home.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/portfolios', PortfolioController::class)->middleware(['auth']);

Route::resource('/abouts', AboutController::class)->middleware(['auth']);

Route::get('/headers', [HeaderController::class, 'index'])->middleware(['auth'])->name('hdr');

Route::get('/headers/{id}/edit', [HeaderController::class, 'edit'])->middleware(['auth'])->name('hdrEdit');

Route::put('/headers/{id}/update', [HeaderController::class, 'update'])->middleware(['auth'])->name('hdrUpdate');

Route::get('/footers', [InfoFooterController::class, 'index'])->middleware(['auth'])->name('ftr');

Route::get('/footers/{id}/edit', [InfoFooterController::class, 'edit'])->middleware(['auth'])->name('ftrEdit');

Route::put('/footers/{id}/update', [InfoFooterController::class, 'update'])->middleware(['auth'])->name('ftrUpdate');


Route::resource('/contacts', ContactController::class);

require __DIR__.'/auth.php';


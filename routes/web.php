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



require __DIR__.'/auth.php';


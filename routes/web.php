<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\QiPageController;
use App\Models\News;
use App\Models\Page;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomePageController::class)->name('pages.home');
Route::get('/qi', QiPageController::class)->name('pages.qi');
Route::get('/work', QiPageController::class)->name('pages.work');
Route::get('/about', QiPageController::class)->name('pages.about');
Route::get('/contact', QiPageController::class)->name('pages.contact');
Route::get('/ideas', QiPageController::class)->name('pages.ideas');


Route::get('/news', function () {
    return [
        'pages' => Page::where('page_template_id', 1)->get(),
        'news' => News::limit(3)->get(),
    ];
});

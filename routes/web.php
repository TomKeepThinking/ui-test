<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\IdeasPageController;
use App\Http\Controllers\QiPageController;
use App\Http\Controllers\WorkPageController;
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
Route::get('/work', WorkPageController::class)->name('pages.work');
Route::get('/work/{id}', [WorkPageController::class, 'show'])->name('pages.work.single');
Route::get('/about', AboutPageController::class)->name('pages.about');
Route::get('/contact', ContactPageController::class)->name('pages.contact');
Route::get('/ideas', IdeasPageController::class)->name('pages.ideas');
Route::get('/ideas/{id}', [IdeasPageController::class, 'show'])->name('pages.idea.single');


Route::get('/news', function () {
    return [
        'pages' => Page::where('page_template_id', 1)->get(),
        'news' => News::limit(3)->get(),
    ];
});

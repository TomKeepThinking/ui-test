<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/logut', function(){
    dd('logged out');
})->name('logout');

Route::get('/news', function(){
    return [
        'page' => Page::where('page_template_id', 1)->get(),
        'news' => News::limit(3)->get()
    ];
});

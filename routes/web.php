<?php

use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/product', function () {
    $lang = request('lang', config('app.locale')); 
    return redirect()->route('product', ['lang' => $lang]);
});

Route::get('/{lang}/product', function(){
    $lang = request('lang', 'id');
    App::setLocale($lang);

    return view('product', ['lang' => $lang]);
})->name('product');


Route::get('courses', function () {
    $lang = request('lang', config('app.locale')); // gunakan default Laravel jika tidak ada
    return redirect()->route('courses', ['lang' => $lang]);
});

Route::get('{lang}/courses', [CoursesController::class, 'index'])
    ->name('courses');
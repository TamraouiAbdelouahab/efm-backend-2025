<?php

use Illuminate\Support\Facades\Route;
use Modules\PkgWidget\Controllers\WidgetController;
Route::get('/', function () {
    return view('Blog::dashboard');
});


Route::get('/dashboard',[WidgetController::class,'call_user_func'])->name('Dashboard');
// Route::get('/Dashboard',[WidgetController::class,'call_user_func'])->name('Dashboard');
Route::get('/widget_test', function () {
    return view('Widget::test');
})->name('test');

Route::post('/widget-execute', [WidgetController::class, 'execute'])->name('widgets.execute');
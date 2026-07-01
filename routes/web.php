<?php

use Illuminate\Support\Facades\Route;
use Intranet\Modules\News\Http\Controllers\NewsController;

/*
 | Routen des News-Moduls.
 |
 | WICHTIG (Konvention):
 |  - URL-Präfix:  modules/{key}       -> hier: modules/news
 |  - Namen:       module.{key}.*      -> hier: module.news.*
 |  - Middleware:  'web' + 'auth'      (Session, CSRF, nur eingeloggt)
 |
 | Die Landing-Page des Moduls ist die Route "module.news.index".
*/
Route::middleware(['web', 'auth'])
    ->prefix('modules/news')
    ->name('module.news.')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/anlegen', [NewsController::class, 'create'])->name('create');
        Route::post('/', [NewsController::class, 'store'])->name('store');
    });

<?php

use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\DocumentController;
use App\Http\Controllers\dashboard\PortfolioController;
use App\Http\Controllers\dashboard\SettingController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//dashboard Routes
Route::group(['prefix' => 'admin', 'namespace' => 'dashboard', 'middleware' => 'auth'], function () {

    Route::get('/', [dashboardController::class , 'index'])->name('dashboard.index');
    Route::get('/adminlogout',  [dashboardController::class , 'indadminlogoutex'])->name('admin.logout');

    Route::group(['prefix' => 'portfolio'], function () {
        
        //portfolio routes
        Route::get('/', [PortfolioController::class , 'index'])->name('portfolio.index');
        Route::get('/delete/{id}', [PortfolioController::class , 'destroy'])->name('portfolio.delete');
        Route::post('/add-new-portfolio', [PortfolioController::class , 'store'])->name('portfolio.store');
        Route::get('/show-portfolio/{id}', [PortfolioController::class , 'show'])->name('portfolio.show');
        Route::get('edit/{id}', [PortfolioController::class , 'edit'])->name('portfolio.edit');
        Route::post('/update', [PortfolioController::class , 'update'])->name('portfolio.update');
        
    });
        //settings routes
        Route::group(['prefix' => 'settings'], function () {
            Route::get('/' , [SettingController::class , 'index'])->name('setting.index');
            Route::get('/edit/{id}', [SettingController::class , 'edit'])->name('setting.edit');
            Route::post('/update', [SettingController::class , 'update'])->name('setting.update');

        });

});



Route::group(['namespace' => 'Front'], function () {

    Route::get('/', [FrontController::class , 'index'])->name('front.index');
    Route::get('/portflio-page', [FrontController::class , 'portflioPage'])->name('portflioPage');
    Route::get('/about-page', [FrontController::class , 'aboutPage'])->name('aboutPage');
    Route::get('/contact-page', [FrontController::class , 'contactPage'])->name('contactPage');
    Route::get('/register-user', [FrontController::class , 'register'])->name('register-user');
    Route::post('/store', [FrontController::class , 'storeUser'])->name('user.store');
   
   
    Route::get('/portfolio/show/{id}', [FrontController::class  ,'show'])->name('front.portfolio.show');
    Route::post('/contact', [FrontController::class , 'store'])->name('contact.store');
    });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

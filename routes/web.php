<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LanguagesController;
use \App\Http\Controllers\PublicController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\ServiceController;
use \App\Http\Controllers\TestimonialsController;
use \App\Http\Controllers\ClientController;
use \App\Http\Controllers\QuotationController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\MessageController;
use \App\Http\Controllers\ApplicantController;
use \App\Http\Controllers\TeamController;

// Site Languages
Route::get('language/{language}', [LanguagesController::class, 'setLanguage'])->name('language');

// Public pages
Route::get('/', [PublicController::class, 'index_home'])->name('public.home.index');
Route::get('about-us', [PublicController::class, 'index_about'])->name('public.about.index');
Route::get('services', [PublicController::class, 'index_service'])->name('public.service.index');
Route::get('clients', [PublicController::class, 'index_client'])->name('public.client.index');

Route::get('quotation', [PublicController::class, 'index_quotation'])->name('public.quotation.index');
Route::post('quotation', [PublicController::class, 'store_quotation'])->name('public.quotation.store');

Route::get('careers', [PublicController::class, 'index_career'])->name('public.career.index');
Route::post('careers', [PublicController::class, 'store_career'])->name('public.career.store');

Route::get('contact-us', [PublicController::class, 'index_contact'])->name('public.contact.index');
Route::post('contact-us', [PublicController::class, 'store_contact'])->name('public.contact.store');

// Dashboard
Route::group(['prefix'=>'dashboard', 'middleware'=>'auth'], function (){
    Route::get('/', function (){ return redirect(route('dashboard.home.index')); })->name('dashboard.main.index');
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard.home.index');

    Route::resource('service', ServiceController::class);
    Route::get('service/destroy/{service}', [ServiceController::class, 'destroy'])->name('dashboard.service.destroy');

    Route::resource('client', ClientController::class);
    Route::get('client/destroy/{client}', [ClientController::class, 'destroy'])->name('dashboard.client.destroy');

    Route::resource('testimonial', TestimonialsController::class);
    Route::get('testimonial/destroy/{testimonial}', [TestimonialsController::class, 'destroy'])->name('dashboard.testimonial.destroy');

    Route::resource('team', TeamController::class);
    Route::get('team/destroy/{team}', [TeamController::class, 'destroy'])->name('dashboard.team.destroy');

    Route::get('contact/edit', [ContactController::class, 'edit'])->name('dashboard.contact.edit');
    Route::put('contact/update/{contact}', [ContactController::class, 'update'])->name('dashboard.contact.update');

    Route::get('quotation', [QuotationController::class, 'index'])->name('dashboard.quotation.index');
    Route::get('message', [MessageController::class, 'index'])->name('dashboard.message.index');
    Route::get('applicant', [ApplicantController::class, 'index'])->name('dashboard.applicant.index');
});

require __DIR__.'/auth.php';

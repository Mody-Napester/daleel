<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LanguagesController;
use \App\Http\Controllers\PublicController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\ServiceController;
use \App\Http\Controllers\ResourceController;
use \App\Http\Controllers\TestimonialsController;
use \App\Http\Controllers\ClientController;
use \App\Http\Controllers\PartnerController;
use \App\Http\Controllers\QuotationController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\MessageController;
use \App\Http\Controllers\ApplicantController;
use \App\Http\Controllers\TeamController;
use \App\Http\Controllers\MediaController;
use \App\Http\Controllers\SiteImageController;

// Site Languages
Route::get('language/{language}', [LanguagesController::class, 'setLanguage'])->name('language');

// Public pages
Route::get('/', [PublicController::class, 'index_home'])->name('public.home.index');

Route::get('about-us', [PublicController::class, 'index_about'])->name('public.about.index');

Route::get('services', [PublicController::class, 'index_service'])->name('public.service.index');
Route::get('services/{id}', [PublicController::class, 'show_service'])->name('public.service.show');

Route::get('resource', [PublicController::class, 'index_resource'])->name('public.resource.index');
Route::get('resource/{id}', [PublicController::class, 'show_resource'])->name('public.resource.show');

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

    Route::resource('media', MediaController::class);

    Route::resource('service', ServiceController::class);
    Route::get('service/destroy/{service}', [ServiceController::class, 'destroy'])->name('dashboard.service.destroy');

    Route::resource('resource', ResourceController::class);
    Route::get('resource/destroy/{resource}', [ResourceController::class, 'destroy'])->name('dashboard.resource.destroy');

    Route::resource('client', ClientController::class);
    Route::get('client/destroy/{client}', [ClientController::class, 'destroy'])->name('dashboard.client.destroy');

    Route::resource('partner', PartnerController::class);
    Route::get('partner/destroy/{client}', [PartnerController::class, 'destroy'])->name('dashboard.partner.destroy');

    Route::resource('testimonial', TestimonialsController::class);
    Route::get('testimonial/destroy/{testimonial}', [TestimonialsController::class, 'destroy'])->name('dashboard.testimonial.destroy');

    Route::resource('team', TeamController::class);
    Route::get('team/destroy/{team}', [TeamController::class, 'destroy'])->name('dashboard.team.destroy');

    Route::get('contact', [ContactController::class, 'edit'])->name('dashboard.contact.edit');
    Route::put('contact/update/{contact}', [ContactController::class, 'update'])->name('dashboard.contact.update');

    Route::get('site_file', [SiteImageController::class, 'edit'])->name('dashboard.site_file.edit');
    Route::post('site_file/update/{site_file}', [SiteImageController::class, 'update'])->name('dashboard.site_file.update');

    Route::get('quotation', [QuotationController::class, 'index'])->name('dashboard.quotation.index');
    Route::get('message', [MessageController::class, 'index'])->name('dashboard.message.index');
    Route::get('applicant', [ApplicantController::class, 'index'])->name('dashboard.applicant.index');
});

require __DIR__.'/auth.php';

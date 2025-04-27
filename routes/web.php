<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['locale'])->group(function () {
    Route::get('', \App\Livewire\Home::class)->name('home');
    Route::get('about-us', \App\Livewire\AboutUs::class)->name('about-us');
    Route::get('our-vision', \App\Livewire\OurVision::class)->name('our-vision');
    Route::get('our-mission', \App\Livewire\OurMission::class)->name('our-mission');
    Route::get('faq', \App\Livewire\FAQSection::class)->name('faq');
    Route::get('contact-us', \App\Livewire\ContactUsSection::class)->name('contact-us');
    Route::get('products', \App\Livewire\Product\Index::class)->name('products');
    Route::get('products/{slug}', \App\Livewire\Product\Show::class)->name('product.show');
});


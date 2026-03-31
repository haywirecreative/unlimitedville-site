<?php

use App\Livewire\HomePage;
use App\Livewire\PlansPage;
use App\Livewire\CartPage;
use App\Livewire\CheckoutPage;
use App\Livewire\PlaceholderPage;
use Illuminate\Support\Facades\Route;

// Main pages
Route::get('/', HomePage::class)->name('home');
Route::get('/plans', PlansPage::class)->name('plans');
Route::get('/cart/{plan?}', CartPage::class)->name('cart');
Route::get('/checkout/{plan?}', CheckoutPage::class)->name('checkout');

// Placeholder pages (to be built out)
Route::get('/solutions', PlaceholderPage::class)
    ->name('solutions')
    ->defaults('title', 'Solutions')
    ->defaults('subtitle', 'Internet solutions for every lifestyle and business need.');

Route::get('/reviews', PlaceholderPage::class)
    ->name('reviews')
    ->defaults('title', 'Reviews')
    ->defaults('subtitle', 'See what our members are saying about Unlimitedville.');

Route::get('/blog', PlaceholderPage::class)
    ->name('blog')
    ->defaults('title', 'Blog')
    ->defaults('subtitle', 'Guides, tips, and news about wireless internet.');

Route::get('/support', PlaceholderPage::class)
    ->name('support')
    ->defaults('title', 'Support')
    ->defaults('subtitle', '24/7 USA-based support for all members.');

Route::get('/login', PlaceholderPage::class)
    ->name('login')
    ->defaults('title', 'Account Login')
    ->defaults('subtitle', 'Manage your Unlimitedville membership.');

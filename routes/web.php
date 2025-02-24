<?php

use Illuminate\Support\Facades\Route;


// Typical way to "route" navigation to a page.
// Adding names to routes allows them to be used as "variables"
// that can be managed from routes.

/*
Route::get('/', function () {
    return view('home');
})->name('home');
*/

// Route to the controller. 
// First parameter is the path to the controller. 
// Second parameter is the method within that controller "index".
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

// Simple way to "route" navigation to a page.
// Good for static pages without dynamic content.
Route::view('contact', 'contact')->name('contact');

// NOTE TO SELF: pay attention to syntax. Extra space breaks a route from working.
// E.g "route::view('about ', 'about')->name('about');".
Route::view('about', 'about')->name('about');

// Defining url to contain the post id. Route Model -binding.
// 
Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CommentController;

//Theme route
Route::controller(ThemeController::class)->name('theme.')->group(
    function(){
        Route::get('/contact','contact')->name('contact');
        Route::get('/','index')->name('index');
        Route::get('/category/{id}','category')->name('category');
    }
);

//Subscriber route
Route::post('/subscriber/store',[SubscriberController::class,'store'])->name('subscriber.store');

//contact route
Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');

//comment route
Route::post('/comment/store',[CommentController::class,'store'])->name('comment.store');

//blog route
Route::get('/my-blogs',[BlogController::class,'myBlogs'])->name('blogs.my-blogs');
Route::resource('blogs',BlogController::class)->except('index');

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventManagerController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
});

// Route::resource('students', EventManagerController::class); 
Route::get('/contact_us', [EventManagerController::class, 'index'])->name('contacts.index');
// Route::get('/contacts', [EventManagerController::class, 'getContacts'])->name('contacts.get');
Route::post('/contact_us', [EventManagerController::class, 'store'])->name('contacts.store');

// Route::get('/contact_us', function () {
//     return view('contact_us');
// });
// Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/exhibition', function () {
    return view('exhibition');
});


Route::get('/event_management', function () {
    return view('event_management');
});

Route::get('/av_service', function () {
    return view('av_service');
});

Route::get('/interior_design', function () {
    return view('interior_design');
});

Route::get('/mall_kiosk', function () {
    return view('mall_kiosk');
});

Route::get('/views_of_services', function () {
    return view('views_of_services');
});
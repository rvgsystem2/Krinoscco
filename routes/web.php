<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [HomeController::class, 'home'])->name('home');

// About route
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Accommodation route
Route::get('/accommodation', [HomeController::class, 'accommodation'])->name('accommodation');

// Banquets and Meetings route
Route::get('/banquets-and-meetings', [HomeController::class, 'banquetsAndMeetings'])->name('banquets-and-meetings');

// Rules and Regulations route
Route::get('/rules-and-regulations', [HomeController::class, 'rulesAndRegulations'])->name('rules-and-regulations');

// Careers route
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');

// Gallery route
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

// Contact Us route
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');




// Accommodation Routes
Route::get('/accommodation/standard-room', [HomeController::class, 'standardRoom'])->name('accommodation.standard');
Route::get('/accommodation/deluxe-room', [HomeController::class, 'deluxeRoom'])->name('accommodation.deluxe');
Route::get('/accommodation/luxury-room', [HomeController::class, 'luxuryRoom'])->name('accommodation.luxury');

// Banquets and Meetings Routes
Route::get('/banquets/lawn-package', [HomeController::class, 'lawnPackage'])->name('banquets.lawn');
Route::get('/banquets/ballroom-package', [HomeController::class, 'ballroomPackage'])->name('banquets.ballroom');

// footerpages
Route::get('/termandcondition', [HomeController::class, 'termandcondition'])->name('termandcondition');
Route::get('/conditions', [HomeController::class, 'conditions'])->name('conditons');
Route::get('/liability', [HomeController::class, 'liability'])->name('liability');
Route::get('/miscelleneous', [HomeController::class, 'miscelleneous'])->name('miscelleneous');
Route::get('/details', [HomeController::class, 'details'])->name('details');
Route::get('/information', [HomeController::class, 'information'])->name('information');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');

Route::post('/send-booking-email', [BookingController::class, 'sendBookingEmail'])->name('booking.send');
Route::get('/thank-you', [BookingController::class, 'thankyou'])->name('thankyou');

<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/people');
Route::get('/people', [Controller::class, 'people'])->name('people');
Route::get('/events', [Controller::class, 'events'])->name('events');
Route::get('/donations', [Controller::class, 'donations'])->name('donations');
Route::get('/people/{person}', [Controller::class, 'showPerson'])->name('people.show');
Route::get('/people/{person}/register', [Controller::class, 'showRegistrationForm'])->name('people.register');
Route::post('/people/{person}/register', [Controller::class, 'registerForEvent']);
Route::get('/people/{person}/donate', [Controller::class, 'showDonationForm'])->name('people.donate');
Route::post('/people/{person}/donate', [Controller::class, 'saveDonation']);

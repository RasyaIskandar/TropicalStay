<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
// Route::get('/rooms', [WelcomeController::class, 'rooms'])->name('rooms.index');

// Daftar kamar
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');

// Pemesanan kamar
Route::resource('bookings', \App\Http\Controllers\BookingController::class);



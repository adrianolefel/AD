<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\NetworkEquipmentController;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AssetOverviewController;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Authenticated User Routes
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile Routes

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
    // Network Equipment Routes
    Route::controller(NetworkEquipmentController::class)->prefix('network-equipments')->group(function () {
        Route::get('', 'index')->name('network-equipments.index');
        Route::get('create', 'create')->name('network-equipments.create');
        Route::post('store', 'store')->name('network-equipments.store');
        Route::get('show/{id}', 'show')->name('network-equipments.show');
        Route::get('edit/{id}', 'edit')->name('network-equipments.edit');
        Route::put('update/{id}', 'update')->name('network-equipments.update');
        Route::delete('destroy/{id}', 'destroy')->name('network-equipments.destroy');
    });
    // Email Form Routes
    Route::get('/form', [SendEmailController::class, 'loadForm'])->name('sendEmail.form');
    Route::post('/sendEmail', [SendEmailController::class, 'send'])->name('send');

    // Computer Routes
    Route::controller(ComputerController::class)->prefix('computers')->group(function () {
        Route::get('', 'index')->name('computers');
        Route::get('create', 'create')->name('computers.create');
        Route::post('store', 'store')->name('computers.store');
        Route::get('show/{id}', 'show')->name('computers.show');
        Route::get('edit/{id}', 'edit')->name('computers.edit');
        Route::put('edit/{id}', 'update')->name('computers.update');
        Route::delete('destroy/{id}', 'destroy')->name('computers.destroy');
    });

    // PDF Generation Route
    Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');

    // Asset Overview Route
    Route::get('/asset-overview', [AssetOverviewController::class, 'index'])->name('asset.overview');
});
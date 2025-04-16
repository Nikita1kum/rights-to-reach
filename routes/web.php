<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/complaint/create', [ComplaintController::class, 'create'])->name('complaint.create');

Route::post('/complaint', [ComplaintController::class, 'store'])->name('complaint.store');

Route::post('/complaint', [ComplaintController::class, 'index'])->name('complaint.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth' , 'role:citizen,ngo')->group(function (){
    Route::get('/complaint/create', [ComplaintController::class, 'create'])->name('complaint.create');
});


require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['sum' => Student::sum('amount')]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/datasiswa', function () {
    return view('datasiswa', ['data' => Student::all()]);
})->middleware(['auth', 'verified'])->name('dashboard.datasiswa');

Route::get('/dashboard/pay', function () {
    return view('paypage');
})->middleware(['auth', 'verified'])->name('dashboard.pay');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('siswa')->group(function () {
   Route::post('/pay', [StudentController::class, 'index'])->name('pay');
});

Route::get('/user/delete/{id}', [StudentController::class, 'delete'])->name('user.delete');
Route::post('/user/update/{id}', [StudentController::class, 'update'])->name('user.update');

require __DIR__.'/auth.php';

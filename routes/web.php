<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;
use App\Exports\UsersExport;

Route::get('/', function () {
    return view('landing');
});

Route::get('/users', [UserDataController::class, 'index'])->name('users.index');

Route::post('/submit-form', [UserDataController::class, 'store'])->name('form.submit');

Route::get('/users/export', function () {
    return Excel::download(new UsersExport, 'users.xlsx');
})->name('users.export');

Route::get('/download-book', [UserDataController::class, 'downloadBook'])->name('download.book');

require __DIR__.'/auth.php';

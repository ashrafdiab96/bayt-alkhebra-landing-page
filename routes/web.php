<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;
use App\Exports\UsersExport;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/users', [UserDataController::class, 'index'])->name('users.index');

Route::get('/users/export', function () {
    return Excel::download(new UsersExport, 'users.xlsx');
})->name('users.export');

require __DIR__.'/auth.php';

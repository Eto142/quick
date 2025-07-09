<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoanApplicationController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/login', function () {
    return view('auth.login');
});




// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');


// Logout Route
Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('user.logout');

Route::prefix('user')->as('user.')->middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home'); // user.home
    Route::get('/alltransactions', [DashboardController::class, 'Alltransactions'])->name('transactions'); // user.transactions
    Route::get('/apply', [DashboardController::class, 'ApplyLoan'])->name('apply'); // user.alert
    Route::get('/setting', [DashboardController::class, 'Setting'])->name('setting'); // user.setting
    Route::get('/help', [DashboardController::class, 'Help'])->name('help'); // user.help
    Route::post('/update-setting', [DashboardController::class, 'updateSettings'])->name('settings'); // user.settings


//     Route::post('/api/loan-applications', [LoanApplicationController::class, 'store']);
// Route::post('/api/calculate-payment', [LoanApplicationController::class, 'calculatePayment']);

Route::post('/loan/application/submit', [LoanApplicationController::class, 'store'])->name('loan.application.submit');
Route::get('/loan-application', [LoanApplicationController::class, 'create'])->name('loan.application');
Route::get('/loan', [LoanApplicationController::class, 'LoanHistory'])->name('loan');
Route::get('/profile', [LoanApplicationController::class, 'Profile'])->name('profile');
// Route::post('/loan-application', [LoanApplicationController::class, 'store'])->name('loan.application.submit');
Route::get('/loan-application/success/{id}', [LoanApplicationController::class, 'success'])->name('loan.application.success');
});



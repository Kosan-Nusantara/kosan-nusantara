<?php

use App\Http\Controllers\Admin\BoardingController;
use App\Http\Controllers\Admin\FacilityController as AdminFacilityController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;
use App\Http\Controllers\App\AboutController;
use App\Http\Controllers\App\ContactController;
use App\Http\Controllers\App\FacilityController;
use App\Http\Controllers\App\GalleryController;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\PackageController;
use App\Http\Controllers\App\ServiceController;
use App\Http\Controllers\App\SupportController;
use App\Http\Controllers\App\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/package/{id}', [PackageController::class, 'detail'])->name('package.detail');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/facility', [FacilityController::class, 'index'])->name('facility');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::name('admin.')->prefix('/admin')->group(function () {
    Route::get('/transaction', [AdminTransactionController::class, 'index'])->name('transaction');
    Route::get('/transaction/datatable', [AdminTransactionController::class, 'datatable'])->name('transaction.datatable');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/datatable', [UserController::class, 'datatable'])->name('users.datatable');
    
    Route::get('/facility', [AdminFacilityController::class, 'index'])->name('facility.index');
    Route::get('/facility/datatable', [AdminFacilityController::class, 'datatable'])->name('facility.datatable');
    Route::get('/facility/create', [AdminFacilityController::class, 'create'])->name('facility.create');
    Route::get('/facility/{id}/edit', [AdminFacilityController::class, 'edit'])->name('facility.edit');
    Route::post('/facility/destroy', [AdminFacilityController::class, 'destroy'])->name('facility.destroy');
    Route::post('/facility/store', [AdminFacilityController::class, 'store'])->name('facility.store');
    
    Route::get('/boarding', [BoardingController::class, 'index'])->name('boarding.index');
    Route::get('/boarding/datatable', [BoardingController::class, 'datatable'])->name('boarding.datatable');
    Route::get('/boarding/create', [BoardingController::class, 'create'])->name('boarding.create');
    Route::get('/boarding/{id}/edit', [BoardingController::class, 'edit'])->name('boarding.edit');
    Route::post('/boarding/destroy', [BoardingController::class, 'destroy'])->name('boarding.destroy');
    Route::post('/boarding/store', [BoardingController::class, 'store'])->name('boarding.store');
});

Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/booking/{id?}', [TransactionController::class, 'booking'])->name('booking');
    Route::post('/booking/{id?}', [TransactionController::class, 'payment'])->name('payment');
    Route::get('/finish', [TransactionController::class, 'finish'])->name('finish');
});

require __DIR__ . '/auth.php';
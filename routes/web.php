<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminReportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\admin\AdminTransactionController;
use App\Http\Controllers\admin\AdminDonationController;
use App\Http\Controllers\admin\AdminCampaignController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', [HomeController::class, 'index']);
Route::get('/donasi', [HomeController::class, 'donasi']);
Route::get('/donasidetail', [HomeController::class, 'donasi_detail']);
Route::get('/transactions/create', [HomeController::class, 'create'])->name('transaksi_create'); // Formulir transaksi
Route::post('/transactions', [HomeController::class, 'store'])->name('transactions.store'); // Menyimpan transaksi

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');

// Rute CRUD untuk AdminTransactionController di area admin
    Route::get('/admin/transactions', [AdminTransactionController::class, 'index'])->name('admin.transaksi_index');

    // Menampilkan formulir untuk membuat transaksi baru
    // Route::get('transactions/create', [TransactionController::class, 'create'])->name('transactions.create');

    // // Menyimpan transaksi baru
    // Route::post('/transactions', [AdminTransactionController::class, 'store'])->name('admin.transactions.store');

    // Menampilkan detail transaksi tertentu
    Route::get('/admin/transactions/{id}', [AdminTransactionController::class, 'show'])->name('admin.transaction_show');

    // Menampilkan formulir untuk mengedit transaksi
    Route::get('/admin/transactions/{id}/edit', [AdminTransactionController::class, 'edit'])->name('admin.transaction_edit');

    // Mengupdate transaksi tertentu
    Route::put('/admin/transactions/{id}', [AdminTransactionController::class, 'update'])->name('admin.transactions.update');

    // Menghapus transaksi tertentu
    Route::delete('/admin/transactions/{id}', [AdminTransactionController::class, 'destroy'])->name('admin.transactions.destroy');

    Route::get('/admin/donasi', [AdminDonationController::class, 'index'])->name('admin.donasi_index');
    Route::get('/admin/donasi/create', [AdminDonationController::class, 'create'])->name('admin.donasi_create');
    Route::post('/admin/donasi', [AdminDonationController::class, 'store'])->name('admin.donasi_store');
    Route::get('/admin/donasi/{id}', [AdminDonationController::class, 'show'])->name('admin.donasi_show');

    // Menampilkan formulir untuk mengedit transaksi
    Route::get('/admin/donasi/{id}/edit', [AdminDonationController::class, 'edit'])->name('admin.donasi_edit');

    // Mengupdate transaksi tertentu
    Route::put('/admin/donasi/{id}', [AdminDonationController::class, 'update'])->name('admin.donasi_update');

    // Menghapus transaksi tertentu
    Route::delete('/admin/donasi/{id}', [AdminDonationController::class, 'destroy'])->name('admin.donasi_destroy');
    Route::get('/admin/campaign', [AdminCampaignController::class, 'index'])->name('admin.campaigns_index');
    Route::get('/admin/campaign/create', [AdminCampaignController::class, 'create'])->name('admin.campaigns_create');
    Route::post('/admin/campaign', [AdminCampaignController::class, 'store'])->name('admin.campaigns_store');
    Route::get('/admin/campaign/{id}', [AdminCampaignController::class, 'show'])->name('admin.campaigns_show');
    Route::get('/admin/campaign/{id}/edit', [AdminCampaignController::class, 'edit'])->name('admin.campaigns_edit');
    Route::put('/admin/campaign/{id}', [AdminCampaignController::class, 'update'])->name('admin.campaigns_update');
    Route::delete('/admin/campaign/{id}', [AdminCampaignController::class, 'destroy'])->name('admin.campaigns_destroy');
    Route::get('/reports', [AdminReportController::class, 'index'])->name('admin.reports.index');
    Route::get('/reports/create', [AdminReportController::class, 'create'])->name('admin.reports.create');
    Route::post('/reports', [AdminReportController::class, 'store'])->name('admin.reports.store');
    Route::get('/reports/{id}/edit', [AdminReportController::class, 'edit'])->name('admin.reports.edit');
    Route::put('/reports/{id}', [AdminReportController::class, 'update'])->name('admin.reports.update');
    Route::delete('/reports/{id}', [AdminReportController::class, 'destroy'])->name('admin.reports.destroy');
    Route::get('/reports/pdf', [AdminReportController::class, 'exportPdf'])->name('admin.reports.exportPdf');
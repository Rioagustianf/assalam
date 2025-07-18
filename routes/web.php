<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssalamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AssalamController::class, 'index'])->name('index');
Route::get('/about', function () {
    return view('layoutes.about');
})->name('about');

Route::get('/ppdb', function () {
    return view('layoutes.ppdb');
})->name('ppdb');

Route::get('/pembelajaran', function () {
    return view('layoutes.pembelajaran');
})->name('pembelajaran');

Route::get('/jadwal', function () {
    return view('layoutes.jadwal');
})->name('jadwal');

Route::get('/guru', function () {
    return view('layoutes.guru');
})->name('guru');

Route::get('/berita', [AssalamController::class, 'beritaIndex'])->name('berita');
Route::get('/berita/{berita}', [AssalamController::class, 'beritaShow'])->name('berita.show');

Route::get('/staff', function () {
    return view('layoutes.staff');
})->name('staff');

Route::get('/kontak', function () {
    return view('layoutes.kontak');
})->name('kontak');

Route::get('/feedback', [AssalamController::class, 'create'])->name('feedback.form');
Route::post('/feedback', [AssalamController::class, 'storeFeedback'])->name('feedback.store');

Route::get('/ppdb/daftar', [AssalamController::class, 'ppdbForm'])->name('ppdb.form');
Route::post('/ppdb/daftar', [AssalamController::class, 'storePpdb'])->name('ppdb.store');

Route::get('/fasilitas', [AssalamController::class, 'fasilitas'])->name('fasilitas');
Route::get('/kegiatan', [AssalamController::class, 'kegiatan'])->name('kegiatan');


Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/ppdb', [AdminController::class, 'ppdbList'])->name('admin.ppdb');
    Route::get('/admin/feedback', [AdminController::class, 'feedbackList'])->name('admin.feedback');
    
    // Berita routes
    Route::get('/admin/berita', [AdminController::class, 'beritaList'])->name('admin.berita');
    Route::get('/admin/berita/create', [AdminController::class, 'beritaCreate'])->name('admin.berita.create');
    Route::post('/admin/berita', [AdminController::class, 'beritaStore'])->name('admin.berita.store');
    Route::get('/admin/berita/{id}/edit', [AdminController::class, 'beritaEdit'])->name('admin.berita.edit');
    Route::put('/admin/berita/{id}', [AdminController::class, 'beritaUpdate'])->name('admin.berita.update');
    Route::delete('/admin/berita/{id}', [AdminController::class, 'beritaDestroy'])->name('admin.berita.destroy');
    
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::get('/admin/ppdb/export', [AdminController::class, 'exportPpdb'])->name('admin.ppdb.export');
    Route::get('/admin/feedback/export', [AdminController::class, 'exportFeedback'])->name('admin.feedback.export');
    Route::get('/admin/ppdb/quota', [AdminController::class, 'ppdbQuota'])->name('admin.ppdb.quota');
    Route::post('/admin/ppdb/quota', [AdminController::class, 'updatePpdbQuota'])->name('admin.ppdb.quota.update');
});


Route::get('/admin', function () {
    if (auth()->check()) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('admin.login');
})->name('admin');



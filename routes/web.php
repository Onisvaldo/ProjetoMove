<?php

use App\Http\Controllers\Clinica\ExameController as ClinicaExameController;
use App\Http\Controllers\Medico\ExameController as MedicoExameController;
use App\Http\Controllers\Medico\LaudoController as MedicoLaudoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Rotas de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    // Rotas da clínica
    Route::prefix('clinica')->name('clinica.')->group(function () {
        Route::get('exames/novo', [ClinicaExameController::class, 'create'])->name('exames.create');
        Route::post('exames', [ClinicaExameController::class, 'store'])->name('exames.store');
    });

    // Rotas do médico
    Route::prefix('medico')->name('medico.')->group(function () {
        Route::get('exames', [MedicoExameController::class, 'index'])->name('exames.index');
        Route::get('exames/{id}', [MedicoExameController::class, 'show'])->name('exames.show');
        Route::post('exames/{id}/laudos', [MedicoLaudoController::class, 'store'])->name('laudos.store');
    
    });
        
        // Grupo de rotas para o admin, prefixadas com /admin
Route::prefix('admin')->name('admin.')->group(function () {

    // Tela de login do admin (sem middleware para permitir acesso)
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');

    // Middleware 'auth:admin' protege as rotas abaixo - só acessa se estiver logado como admin
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        
        // Outras rotas admin protegidas aqui...
    });
});


require __DIR__.'/auth.php';
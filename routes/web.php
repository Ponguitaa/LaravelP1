<?php
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Ruta de redirección
Route::get('/', function () {
    return redirect()->route('projects.index');
});

// Middleware para autenticación y verificación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Middleware para el rol de administrador
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('projects', ProjectController::class)->except(['index', 'show']);
});

// Middleware para el rol de estudiante
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
});

// Rutas accesibles para todos los usuarios autenticados
Route::middleware('auth')->group(function () {
    Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
});
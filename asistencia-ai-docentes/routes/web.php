<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocenteController; // <- TU CONTROLADOR PRINCIPAL

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
*/

// 1. Ruta para MOSTRAR la vista de Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login'); // <-- ¡AHORA LA RUTA GET SE LLAMA 'login'!

// 2. Rutas que manejan el formulario de Login/Logout
// 2. Rutas que manejan el formulario de Login/Logout
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 3. Grupo de rutas protegidas (necesitas iniciar sesión)
Route::middleware(['auth'])->group(function () {

    // Ruta para la página de Inicio
    Route::get('/home', [DocenteController::class, 'showHome'])->name('home');

    // Ruta para la página de "Nuestro Equipo"
    Route::get('/equipo', [DocenteController::class, 'showEquipo'])->name('equipo');

    // ¡ESTA ES LA RUTA QUE TE DA EL ERROR!
    // Apunta /asistencia a la función que muestra la info Y el formulario
    Route::get('/asistencia', [DocenteController::class, 'showAsistenciaForm'])->name('asistencia.form');
    
    // Ruta que PROCESA la búsqueda de DNI
    Route::get('/buscar-docente', [DocenteController::class, 'buscar'])->name('buscar.docente');

});
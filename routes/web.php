<?php


use App\Http\Controllers\dashboard\usuario\AnuncioController;
use App\Http\Controllers\dashboard\usuario\ConfigController;
use App\Http\Controllers\dashboard\usuario\DashboardController;
use App\Http\Controllers\dashboard\usuario\PagoController;
use App\Http\Controllers\dashboard\usuario\PerfilController;
use App\Http\Controllers\dashboard\usuario\SuscripcionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('dashboard', [DashboardController::class, 'store'])->middleware('guest');
Route::get('dashboard', [DashboardController::class, 'index'])->name('usuario.dashboard');

Route::get('dashboard/anuncios', [AnuncioController::class, 'index'])->name('usuario.anuncio.index');

Route::get('dashboard/ratings', [AnuncioController::class, 'index'])->name('usuario.rating.index');

Route::get('dashboard/suscripcion', [SuscripcionController::class, 'index'])->name('usuario.suscripcion.index');

Route::get('dashboard/pagos', [PagoController::class, 'index'])->name('usuario.pagos.index');

Route::get('dashboard/perfil', [PerfilController::class, 'index'])->name('usuario.perfil.index');

Route::get('dashboard/configuracion', [ConfigController::class, 'index'])->name('usuario.configuracion.index');




Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

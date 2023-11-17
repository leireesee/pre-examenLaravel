<?php

use App\Http\Controllers\DispositivosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//PASAR LOS DATOS A LA VISTA DASHBOARD PARA QUE SALGA EL NOMBRE Y EMAIL
Route::get('/dashboard', function (Request $request) {

    $user = $request->user(); //$user = auth()->user();
    
    $datosUsuario = [
        'nombre' => $user->name,
        'email' => $user->email
    ];

    return view('dashboard')->with($datosUsuario);

})->middleware(['auth', 'verified'])->name('dashboard');


//PASAR LOS DATOS A TRAVES DE UN CONTROLADOR
Route::get('/dispositivos', [DispositivosController::class, 'mostrarDispositivos'])->middleware(['auth', 'verified'])->name('dispositivos');



//FORMULARIO DE AÑADIR DISPOSTIVOS
//ver formulario
Route::get('/nuevoDispositivo', [DispositivosController::class, 'verFormulario'])->middleware(['auth', 'verified'])->name('nuevoDispositivo');

//añadir datos
Route::post('/anadirDispositivo', [DispositivosController::class, 'anadirDispositivo'])->middleware(['auth', 'verified'])->name('anadirDispositivo');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

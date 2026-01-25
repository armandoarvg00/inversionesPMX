<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\UserProfileController;

/*
|--------------------------------------------------------------------------
| Public (guest)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    // Si está logueado -> dashboard, si no -> login
    return auth()->check() ? redirect('/dashboard') : redirect('/login');
})->name('root');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    Route::get('/reset-password', [ResetPassword::class, 'show'])->name('reset-password');
    Route::post('/reset-password', [ResetPassword::class, 'send'])->name('reset.perform');

    Route::get('/change-password', [ChangePassword::class, 'show'])->name('change-password');
    Route::post('/change-password', [ChangePassword::class, 'update'])->name('change.perform');
});

/*
|--------------------------------------------------------------------------
| Authenticated (private)
|--------------------------------------------------------------------------
| IMPORTANTE: aquí metemos nocache para evitar "atrás" mostrando páginas.
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'nocache'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    // ✅ MUY IMPORTANTE: /chart estaba sin auth, lo metemos aquí
    Route::get('/chart', function () {
        return view('charts.index');
    })->name('chart');

    Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
    Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');

    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');

    Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');

    // estas static pages normalmente no deberían ir con guest si las quieres ver logueado:
    Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
    Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | Catch-all (AL FINAL SIEMPRE)
    |--------------------------------------------------------------------------
    | 1) Debe ir al final
    | 2) Restringimos lo que puede capturar para no romper assets o rutas raras
    */
    Route::get('/{page}', [PageController::class, 'index'])
        ->where('page', '^(?!api|storage|build|vendor|js|css|img|images).*$')
        ->name('page');
});

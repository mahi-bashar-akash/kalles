<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaController;

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

Route::get('/admin/auth/', [SpaController::class, 'admin'])->where('any', '.*')->name('lvs.admin.auth');

Route::get('/admin/auth/{any}', [SpaController::class, 'admin'])->where('any', '.*')->name('lvs.admin.auth.any');

Route::get('/admin/auth', function () { return redirect()->route('lvs.admin.auth.any', 'login'); } );

Route::get('/admin/portal', [SpaController::class, 'admin'])->where('any', '.*')->name('lvs.admin.portal');

Route::get('/admin/portal/{any}', [SpaController::class, 'admin'])->where('any', '.*')->name('lvs.admin.portal.any');

Route::get('/admin/', function () { return redirect()->route('lvs.admin.portal.any', 'dashboard'); } );

Route::get('/user/auth/', [SpaController::class, 'user'])->where('any', '.*')->name('lvs.user.auth');

Route::get('/user/auth/{any}', [SpaController::class, 'user'])->where('any', '.*')->name('lvs.user.auth.any');

Route::get('/user/auth', function () { return redirect()->route('lvs.user.auth.any', 'login'); } );

Route::get('/user/portal', [SpaController::class, 'user'])->where('any', '.*')->name('lvs.user.portal');

Route::get('/user/portal/{any}', [SpaController::class, 'user'])->where('any', '.*')->name('lvs.user.portal.any');

Route::get('/', function () { return redirect()->route('lvs.user.portal.any', 'home'); } );

<?php

use App\Http\Controllers\SecurityController as Security;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['2fa'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/2fa', function () {
        return redirect(route('home'));
    })->name('2fa');
});

Route::get('/complete-registration', [RegisterController::class, 'completeRegistration'])
    ->name('complete.registration');

Route::prefix('/status')->name('security-')->group(function () {
    Route::get('/', [Security::class, 'index'])->name('index');
    Route::get('/door/lock', [Security::class, 'door_lock'])->name('door_lock');
    Route::get('/door/unlock', [Security::class, 'door_unlock'])->name('door_unlock');
    Route::get('/outgate/open', [Security::class, 'outgate_open'])->name('outgate_open');
    Route::get('/outgate/close', [Security::class, 'outgate_close'])->name('outgate_close');
    Route::get('/ingate/open', [Security::class, 'ingate_open'])->name('ingate_open');
    Route::get('/ingate/close', [Security::class, 'ingate_close'])->name('ingate_close');
    Route::get('/all/armed', [Security::class, 'all_armed'])->name('all_armed');
    Route::get('/all/disarmed', [Security::class, 'all_disarmed'])->name('all_disarmed');
    Route::get('/perimeter/armed', [Security::class, 'perimeter_armed'])->name('perimeter_armed');
    Route::get('/perimeter/disarmed', [Security::class, 'perimeter_disarmed'])->name('perimeter_disarmed');
});

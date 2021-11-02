<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoverpageController;

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
    return redirect('/coverpage');
});


// Route::get('/coverpage/create', [CoverpageController::class, 'create']);

// Route::post('/coverpage', [CoverpageController::class, 'store']);

Route::resource('coverpage', CoverpageController::class);

Route::get('/coverpage/{id}', [CoverpageController::class, 'show']);

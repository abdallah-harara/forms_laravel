<?php

use App\Http\Controllers\FormsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('form1', [FormsController::class,'form1' ])->name('form1');
Route::post('form1_data', [FormsController::class, 'form1_data'])->name('form1_data');

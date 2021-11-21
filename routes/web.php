<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchantController;
use App\Models\Merchant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

//Admin Login start : /admin/login
Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'storeAdmin'])->name('admin.login');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

});


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard')->middleware('auth:admin');


//User routes Start

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//merchant routes start:
Route::prefix('merchant')->group(function (){

    Route::post('/store', [MerchantController::class, 'store'])->name('merchant_store');
});



//this routes for tests


Route::get('/test', function (){
  return  $data = Merchant::where('created_at', '>', Carbon::now()->subHours(1)->toDateTimeString())->select('username', 'email', 'trade_type')->get();


});
//test succeed


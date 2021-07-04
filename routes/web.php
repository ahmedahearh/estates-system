<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ChaletController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WebsiteController;
use App\Models\Image;
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

// Route::get('/', function () {
//     return view('welcome');

Route::get('/', [WebsiteController::class,'index']);
Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/about', function () {
    return view('website.about');
});
Route::get('/blog', function () {
    return view('website.blog');
});
Route::get('/property', function () {
    return view('website.property');
});
Route::get('/apartment2', function () {
    return view('website.apartment2');
});
Route::get('/apartment3', function () {
    return view('website.apartment3');
});
Route::get('/apartment4', function () {
    return view('website.apartment4');
});

Route::get('/blog-single', function () {
    return view('website.blog-single');
});

Route::get('/single2', function () {
    return view('website.single2');
});

Route::get('/single3', function () {
    return view('website.single3');
});

Route::get('/blog-single4', function () {
    return view('website.single4');
});


Route::group(['middleware'=>'auth'],function (){
    Route::group(['prefix'=>'dashboard'],function (){
        Route::get('/',[\App\Http\Controllers\Homecontroller::class,'index'])->name('dashboard');
        Route::resource('admins', AdminController::class);
        Route::resource('owner', OwnerController::class);
        Route::resource('cities', CityController::class);
        Route::resource('property', PropertyController::class);
        Route::resource('apartments', ApartmentController::class);
        Route::resource('lands', LandController::class);
        Route::resource('chalet', ChaletController::class);
        Route::resource('store', StoreController::class);
        Route::resource('rent',RentController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('role.permission', RolePermissionController::class);
        Route::resource('images', ImageController::class);
    });

});

require __DIR__.'/auth.php';

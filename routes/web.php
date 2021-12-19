<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\Admin\HomeController;




//use App\Http\Controllers\Admin;


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


/*Route::get('/', function () {
    return redirect('/home');
});
*/

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

    #Category
    Route::get('/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('/category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('/category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('/category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'delete'])->name('admin_category_delete');
    Route::get('/category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
});

Route::middleware('auth')->prefix('admin/place')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\PlaceController::class,'index'])->name('admin_place');
    Route::get('/add',[\App\Http\Controllers\Admin\PlaceController::class,'add'])->name('admin_place_add');
    Route::post('/create',[\App\Http\Controllers\Admin\PlaceController::class,'create'])->name('admin_place_create');
    Route::post('update/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'update'])->name('admin_place_update');
    Route::get('edit/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'edit'])->name('admin_place_edit');
    Route::get('delete/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'delete'])->name('admin_place_delete');
    Route::get('show',[\App\Http\Controllers\Admin\PlaceController::class,'show'])->name('admin_place_show');
});


Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::get('/admin/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');

#Place
/*Route::prefix('/admin/place')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\PlaceController::class,'index'])->name('admin_place');
    Route::get('/add',[\App\Http\Controllers\Admin\PlaceController::class,'add'])->name('admin_place_add');
    Route::post('/create',[\App\Http\Controllers\Admin\PlaceController::class,'create'])->name('admin_place_create');
    Route::post('update/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'update'])->name('admin_place_update');
    Route::get('edit/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'edit'])->name('admin_place_edit');
    Route::get('delete/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'delete'])->name('admin_place_delete');
    Route::get('show',[\App\Http\Controllers\Admin\PlaceController::class,'show'])->name('admin_place_show');
});

*/

Route::get('/home',[HomeController::class,'home'])->name('home');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/akdeniz',[HomeController::class,'b_akdeniz'])->name('akdeniz');

Route::get('/dogu-anadolu',[HomeController::class,'b_dogu'])->name('dogu');

Route::get('/ege',[HomeController::class,'b_ege'])->name('ege');

Route::get('/guneydogu',[HomeController::class,'b_guneydogu'])->name('guneydogu');

Route::get('/ic-anadolu',[HomeController::class,'b_icanadolu'])->name('icanadolu');

Route::get('/karadeniz',[HomeController::class,'b_karadeniz'])->name('karadeniz');

Route::get('/marmara',[HomeController::class,'b_marmara'])->name('marmara');
Route::get('/marmara/dolmabahce',[HomeController::class,'b_marmara_dolmabahce'])->name('marmara_dolmabahce');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

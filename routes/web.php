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

#Admin Login
Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::get('/admin/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');

#User Login
Route::get('/home/login',[\App\Http\Controllers\UserController::class,'login'])->name('home_login');
Route::get('/home/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('home_logout');
Route::post('/home/logincheck',[\App\Http\Controllers\UserController::class,'logincheck'])->name('home_logincheck');

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');
    Route::get('/mycomment',[\App\Http\Controllers\UserController::class,'mycomments'])->name('mycomments');
    Route::get('/delete/{id}',[\App\Http\Controllers\UserController::class,'destroycomment'])->name('user_comment_delete');
});

#User
Route::middleware('auth')->prefix('user')->namespace('myaccount')->group(function(){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'index'])->name('profile.show');

    Route::get('/place',[\App\Http\Controllers\PlaceController::class,'index'])->name('user_place');
    Route::get('/place/add',[\App\Http\Controllers\PlaceController::class,'add'])->name('user_place_add');
    Route::post('/place/create',[\App\Http\Controllers\PlaceController::class,'create'])->name('user_place_create');
    Route::post('/placeupdate/{id}',[\App\Http\Controllers\PlaceController::class,'update'])->name('user_place_update');
    Route::get('/placeedit/{id}',[\App\Http\Controllers\PlaceController::class,'edit'])->name('user_place_edit');
    Route::get('/placedelete/{id}',[\App\Http\Controllers\PlaceController::class,'delete'])->name('user_place_delete');
    Route::get('/placeshow',[\App\Http\Controllers\PlaceController::class,'show'])->name('user_place_show');
});

#User Place Image
Route::middleware('auth')->prefix('user/image')->group(function(){
    Route::get('/create/{place_id}',[\App\Http\Controllers\ImageController::class,'create'])->name('user_image_add');
    Route::post('/store/{place_id}',[\App\Http\Controllers\ImageController::class,'store'])->name('user_image_store');
    Route::get('/delete/{id}/{place_id}',[\App\Http\ControllersImageController::class,'destroy'])->name('user_image_delete');
    Route::get('/show',[\App\Http\Controllers\ImageController::class,'show'])->name('user_image_show');
});


#Category
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'admin_index'])->name('admin_home');

    Route::get('/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('/category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('/category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('/category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('/category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'delete'])->name('admin_category_delete');
    Route::get('/category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
});


#Place
Route::middleware('auth')->prefix('admin/place')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\PlaceController::class,'index'])->name('admin_place');
    Route::get('/add',[\App\Http\Controllers\Admin\PlaceController::class,'add'])->name('admin_place_add');
    Route::post('/create',[\App\Http\Controllers\Admin\PlaceController::class,'create'])->name('admin_place_create');
    Route::post('update/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'update'])->name('admin_place_update');
    Route::get('edit/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'edit'])->name('admin_place_edit');
    Route::get('delete/{id}',[\App\Http\Controllers\Admin\PlaceController::class,'delete'])->name('admin_place_delete');
    Route::get('show',[\App\Http\Controllers\Admin\PlaceController::class,'show'])->name('admin_place_show');
});


#Place Image Gallery
Route::middleware('auth')->prefix('admin/image')->group(function(){
    Route::get('/create/{place_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
    Route::post('/store/{place_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
    Route::get('/delete/{id}/{place_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
    Route::get('/show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
});


#Settings
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('/setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
});

#Message
Route::middleware('auth')->prefix('admin/messages')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
    Route::get('/edit/{id}',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
    Route::post('/update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
    Route::get('/delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
    Route::get('/show/{id}',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');
});

#Editor
Route::middleware('auth')->prefix('admin/editor')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\EditorController::class,'index'])->name('admin_editor');
    Route::get('/add',[\App\Http\Controllers\Admin\EditorController::class,'add'])->name('admin_editor_add');
    Route::post('/create',[\App\Http\Controllers\Admin\EditorController::class,'create'])->name('admin_editor_create');

    Route::post('update/{id}',[\App\Http\Controllers\Admin\EditorController::class,'update'])->name('admin_editor_update');
    Route::get('edit/{id}',[\App\Http\Controllers\Admin\EditorController::class,'edit'])->name('admin_editor_edit');
  
    Route::get('/delete/{id}',[\App\Http\Controllers\Admin\EditorController::class,'destroy'])->name('admin_editor_delete');
    Route::get('/show/{id}',[\App\Http\Controllers\Admin\EditorController::class,'show'])->name('admin_editor_show');
});

#Comment
Route::middleware('auth')->prefix('admin/comments')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\CommentController::class,'index'])->name('admin_comment');
    Route::get('/edit/{id}',[\App\Http\Controllers\Admin\CommentController::class,'edit'])->name('admin_comment_edit');
    Route::post('/update/{id}',[\App\Http\Controllers\Admin\CommentController::class,'update'])->name('admin_comment_update');
    Route::get('/delete/{id}',[\App\Http\Controllers\Admin\CommentController::class,'destroy'])->name('admin_comment_delete');
    Route::get('/show/{id}',[\App\Http\Controllers\Admin\CommentController::class,'show'])->name('admin_comment_show');
});

#Faq
Route::middleware('auth')->prefix('admin')->group(function(){
 
    Route::get('/faq',[\App\Http\Controllers\Admin\FaqController::class,'index'])->name('admin_faq');
    Route::get('/faq/add',[\App\Http\Controllers\Admin\FaqController::class,'add'])->name('admin_faq_add');
    Route::post('/faq/create',[\App\Http\Controllers\Admin\FaqController::class,'create'])->name('admin_faq_create');
    Route::post('/faq/update/{id}',[\App\Http\Controllers\Admin\FaqController::class,'update'])->name('admin_faq_update');
    Route::get('/faq/edit/{id}',[\App\Http\Controllers\Admin\FaqController::class,'edit'])->name('admin_faq_edit');
    Route::get('/faq/delete/{id}',[\App\Http\Controllers\Admin\FaqController::class,'delete'])->name('admin_faq_delete');
    Route::get('/faq/show',[\App\Http\Controllers\Admin\FaqController::class,'show'])->name('admin_faq_show');
});


#Home
Route::get('/home',[HomeController::class,'home'])->name('home');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/aboutus',[HomeController::class,'aboutUs'])->name('aboutus');

Route::get('/references',[HomeController::class,'references'])->name('references');

Route::post('/sendmessage',[HomeController::class,'sendMessage'])->name('sendmessage');

Route::get('/place/{id}/{title}',[HomeController::class,'places'])->name('place');
Route::get('/categoryplaces/{id}/{title}',[HomeController::class,'categoryplaces'])->name('categoryplaces');

Route::post('getplace',[HomeController::class,'getplace'])->name('getplace');

Route::get('/faq',[HomeController::class,'faq'])->name('faq');

Route::get('/editor/{id}',[HomeController::class,'editor'])->name('editor');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

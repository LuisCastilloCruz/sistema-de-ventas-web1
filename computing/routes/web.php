<?php

use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebShopController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\BusinessController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('admin/categories', 'CategoryController')->names('categories');
Route::get('admin/category/{module}', 'CategoryController@module')->name('categories.module');
Route::resource('admin/subcategories', 'SubcategoryController')->names('subcategories');
Route::resource('admin/tags', 'TagController')->names('tags');

Route::resource('admin/posts', 'PostController')->names('posts');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');


Route::delete('/reply/destroy/{commet}', 'CommentController@destroy')->name('comment.destroy');
Route::get('/reply/{commet}/edit', 'CommentController@edit')->name('comment.edit');
Route::put('/reply/{commet}', 'CommentController@update')->name('comment.update');

Route::post('/commentProduct/store', 'CommentController@productStore')->name('productComment.add');
Route::resource('admin/brands', 'BrandController')->names('brands');

Route::resource('admin/social_medias', 'SocialMediaController')->names('social_medias');
Route::resource('admin/providers', 'ProviderController')->names('providers');

Route::resource('admin/products', 'ProductController')->names('products');
Route::resource('admin/clients', 'ClientController')->names('clients');
Route::resource('admin/promotions', 'PromotionController')->names('promotions');
Route::resource('admin/business', 'BusinessController')->names('business')->only(['index', 'update']);

Route::get('/', [WebShopController::class, 'welcome'])->name('web.welcome');
Route::get('/about', function () {return view('borys\about');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::put('update_client/{user}/update', [UserController::class, 'update_client'])->name('web.update_client');
Route::put('update_password/{user}/update', [UserController::class, 'update_password'])->name('web.update_password');
Route::resource('admin/users', 'UserController')->names('users');

Route::post('upload_image/{id}', [AjaxController::class, 'upload_image'])->name('upload.image');
Route::post('upload_images_product/{id}', [AjaxController::class, 'upload_images_product'])->name('upload_images_product');
Route::post('upload_images_post/{id}', [AjaxController::class, 'upload_images_post'])->name('upload_images_post');
Route::get('get_images/{id}', [AjaxController::class, 'get_images'])->name('get.images');
Route::get('get_subcategories', [AjaxController::class, 'get_subcategories'])->name('get_subcategories');
Route::get('get_products_by_subcategory', [AjaxController::class, 'get_products_by_subcategory'])->name('get_products_by_subcategory');
Route::post('file_delete', [AjaxController::class, 'file_delete'])->name('file.delete');
Route::get('mark_all_notifications', [NotificationController::class , 'mark_all_notifications'])->name('mark_all_notifications');

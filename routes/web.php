<?php

use App\Http\Controllers\backend\ActivityController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\DashboardController;
// use Mcamara\LaravelLocalization\LaravelLocalization;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::group(['prefix' => 'app'],function(){
        Route::get('permissions/{id}',[RoleController::class,'edit'])->name('permissions');
        // Route::put('permissions/{id}',[RoleController::class,'edit'])->name('permissions');
        Route::resource('roles', RoleController::class);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');   
        //admins
        Route::get('admins', [UserController::class, 'indexAdmins'])->name('app.admins.index');
        Route::post('admins', [UserController::class, 'storeAdmin'])->name('app.admins.store');
        Route::delete('admins/{id}', [UserController::class, 'deleteAdmin'])->name('app.admins.delete');
        Route::put('admins/{id}', [UserController::class, 'updateAdmin'])->name('app.admins.update');
        //Contacts
        Route::get('contacts',[ContactController::class, 'index'])->name('contacts');
        Route::delete('contacts/delete/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
        Route::get('all_contacts',[ContactController::class,'all_Contacts'])->name('all_Contacts');
        //Services
        Route::get('services',[ServiceController::class,'index'])->name('services.back');
        Route::get('service/{id}/edit',[ServiceController::class,'edit'])->name('service.edit');
        Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
        Route::put('service/{id}/update',[ServiceController::class,'update'])->name('service.update');
        Route::delete('service/{id}/delete',[ServiceController::class,'destroy'])->name('service.destroy');
        Route::get('all_services',[ServiceController::class,'all_services_search'])->name('all_services');
        Route::get('services/create',[ServiceController::class,'create'])->name('service.create');
        Route::post('service/image-upload',[ServiceController::class,'storeImage'])->name('image.upload');

         //brands
         Route::get('brands',[BrandController::class,'index'])->name('brands.back');
         Route::get('brand/{id}/edit',[BrandController::class,'edit'])->name('brand.edit');
         Route::post('brand/store',[BrandController::class,'store'])->name('brand.store');
         Route::put('brand/{id}/update',[BrandController::class,'update'])->name('brand.update');
         Route::delete('brand/{id}/delete',[BrandController::class,'destroy'])->name('brand.destroy');
         Route::get('brand/create',[BrandController::class,'create'])->name('brand.create');
         Route::get('all_brands',[BrandController::class,'all_brands_search'])->name('all_brands');
         Route::post('brand/image-upload',[BrandController::class,'storeImage'])->name('image.upload.brand');
         //Products
         Route::get('products',[ProductController::class,'index'])->name('products.back');
         Route::get('product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
         Route::post('product/store',[ProductController::class,'store'])->name('product.store');
         Route::put('product/{id}/update',[ProductController::class,'update'])->name('product.update');
         Route::delete('product/{id}/delete',[ProductController::class,'destroy'])->name('product.destroy');
         Route::get('product/create',[ProductController::class,'create'])->name('product.create');
         Route::get('all_products',[ProductController::class,'all_products_search'])->name('all_products');
         Route::post('product/image-upload',[ProductController::class,'storeImage'])->name('image.upload.product');
         //Categories
         Route::get('categories',[CategoryController::class,'index'])->name('categories');
         Route::get('category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
         Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
         Route::put('category/{id}/update',[CategoryController::class,'update'])->name('category.update');
         Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
         Route::get('all_categories',[CategoryController::class,'all_Categories'])->name('all_categories');
         Route::delete('category/{id}/delete',[CategoryController::class,'destroy'])->name('category.destroy');
         //ACtivities
         Route::get('activities',[ActivityController::class,'index'])->name('activities.back');
         Route::get('activity/{id}/edit',[ActivityController::class,'edit'])->name('activity.edit');
         Route::post('activity/store',[ActivityController::class,'store'])->name('activity.store');
         Route::put('activity/{id}/update',[ActivityController::class,'update'])->name('activity.update');
         Route::delete('activity/{id}/delete',[ActivityController::class,'destroy'])->name('activity.destroy');
         Route::get('activity/create',[ActivityController::class,'create'])->name('activity.create');
         Route::post('activity/image-upload',[ActivityController::class,'storeImage'])->name('image.upload.activity');
         Route::get('activities/all',[ActivityController::class,'all_activities'])->name('all_activities');
         Route::get('/activity/{id}/images/{imageName}', [ActivityController::class ,'deleteImage'])->name('delete-activity-image');
    });
});




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('brand',[HomeController::class,'brand'])->name('brand');
    Route::get('product/{id}/{title?}',[HomeController::class,'product'])->name('product');
    Route::get('activity/{id}',[HomeController::class,'activity'])->name('activity');
    Route::get('activities',[HomeController::class,'activities'])->name('activities');
    Route::get('services',[HomeController::class,'services'])->name('services');
    Route::get('about',[HomeController::class,'about'])->name('about');
    Route::get('contact',[HomeController::class,'contact'])->name('contact');
    Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
});


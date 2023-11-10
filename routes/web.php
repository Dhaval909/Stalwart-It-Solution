<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\blogController;
use App\Http\Controllers\frontend\blogsingleController;
use App\Http\Controllers\frontend\innerpageController;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\contactusController;
use App\Http\Controllers\frontend\portfolioController;
use App\Http\Controllers\frontend\teamController;
use App\Http\Controllers\frontend\webdevlopmentController;
use App\Http\Controllers\frontend\NativeappsController;
use App\Http\Controllers\frontend\CrossplatformController;
use App\Http\Controllers\frontend\wireframeController;
use App\Http\Controllers\frontend\hiredevloperController;
use App\Http\Controllers\Admin\ContactUsFormController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\ContactusController as AdminContactusController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\ProtfolioController;
use App\Http\Controllers\Admin\DeviceController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\ContactssController;



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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blog-single',[blogsingleController::class,'index'])->name('singleblog');
Route::get('/blog',[blogController::class,'index'])->name('blog');
Route::get('/inner-page',[innerpageController::class,'index'])->name('innerpage');

Route::get('/about',[aboutController::class,'index'])->name('about');
Route::get('/contactus',[contactusController::class,'index'])->name('contactus');
Route::get('/portfolio',[portfolioController::class,'index'])->name('portfolio');
Route::get('/team',[teamController::class,'index'])->name('team');
Route::get('/webdevlopment',[webdevlopmentController::class,'index'])->name('webdevelopment');
Route::get('/nativeapps',[NativeappsController::class,'index'])->name('nativeapps');
Route::get('/crossplatform',[CrossplatformController::class,'index'])->name('crossplatform');
Route::get('/wireframe',[wireframeController::class,'index'])->name('wireframe');
Route::get('/hiredevloper',[hiredevloperController::class,'index'])->name('hiredeveloper');
Route::get('/terms',[HomeController::class,'terms'])->name('terms');
Route::get('/privacy',[HomeController::class,'privacy'])->name('privacy');
Route::resource('posts', 'PostController'::class);



Route::get('/admin',[AdminController::class,'index'])->name('login');
Route::post('/admin',[AdminController::class,'makeLogin']);
Route::group(['middleware'=>'auth:admin'],function(){
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('page-create');
});


Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });


Route::get('/portfolioss',[ProtfolioController::class,'index'])->name('portfolios');
Route::get('/blogs',[BlogsController::class,'index'])->name('blogs');
Route::get('/teams',[TeamsController::class,'index'])->name('teams');
Route::get('/contact',[ContactUsFormController::class,'createForm'])->name('contact');
Route::post('/contact',[ContactUsFormController::class,'send_contact'])->name('sendcontact');
//Route::get('/contact-show',[ContactssController::class,'show'])->name('admin.contact.show');


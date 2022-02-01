<?php

use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\ChooseContentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/



Route::get('/', [PagesController::class,'welcome']);

// routes for the about us section from the admin panel
Route::get('/about', [SectionPagesController::class,'about'] )->name('about'); 
Route::post('/postAbout', [AboutContentController::class,'store']);
Route::put('/updateDescription', [AboutContentController::class,'updateDescription']);
Route::put('/updateBottomImage', [AboutContentController::class, 'updateBottomImage']);
Route::put('/updateRightImage', [AboutContentController::class, 'updateRightImage']);
Route::put('/updateLeftImage', [AboutContentController::class, 'updateLeftImage']);
Route::put('/updateBottomImage', [AboutContentController::class, 'updateBottomImage']);
Route::put('/updateHeadingInfo', [AboutContentController::class, 'updateHeadingInfo']);
Route::put('/updateAboutInfo', [AboutContentController::class, 'updateAboutInfo']);
Route::put('/updateServiceOne', [AboutContentController::class, 'updateService1']);
Route::put('/updateServiceTwo', [AboutContentController::class, 'updateService2']);
Route::put('/updateServiceThree', [AboutContentController::class, 'updateService3']);
Route::put('/updateTopLeft', [AboutContentController::class, 'updateTopLeft']);


// routes for the services section from the admin panel
Route::get('/service', [SectionPagesController::class, 'service'])->name('service');
Route::post('/postService', [ServiceContentController::class, 'store']);
Route::put('/updateService2', [ServiceContentController::class, 'updateService2'])->name('updateService2');
Route::put('/updateService3', [ServiceContentController::class, 'updateService3'])->name('updateService2');
Route::put('/updateService1', [ServiceContentController::class, 'updateService1'])->name('updateService2');


// routes for the Why choose us section from the admin panel
Route::get('/choose', [SectionPagesController::class, 'choose'])->name('choose');
Route::post('/postChoose', [ChooseContentController::class, 'store']);
Route::put('/updateChoose', [ChooseContentController::class, 'update']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

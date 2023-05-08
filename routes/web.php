<?php

use App\Http\Controllers\CssController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\JsController;
use App\Http\Controllers\TemplateController;
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
    return view('cms.index');
});

// Route::get('parent' , function(){
//     return view('cms.parent');
// });

Route::prefix('cms/admin/')->group(function(){
    Route::view( 'parentss' , 'cms.parentss');
    Route::view( 'test' , 'cms.test');
    Route::resource('index' , IndexController::class);
    Route::resource('htmls' , HtmlController::class);
    Route::post('update_htmls/{id}' , [HtmlController::class , 'update'])->name('update_htmls');
    Route::resource('csss' , CssController::class);
    Route::post('update_csss/{id}' , [CssController::class , 'update'])->name('update_csss');
    Route::resource('jses' , JsController::class);
    Route::post('update_jses/{id}' , [JsController::class , 'update'])->name('update_jses');
    Route::resource('templates' , TemplateController::class);
    Route::post('update_templates/{id}' , [TemplateController::class , 'update'])->name('update_templates');
    Route::resource('forms' , FormController::class);
    Route::resource('informations' , InformationController::class);
    Route::post('update_informations/{id}' , [InformationController::class , 'update'])->name('update_informations');
    Route::resource('info' , InfoController::class);

});

Auth::routes();
Auth::routes(['register'=>false]);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

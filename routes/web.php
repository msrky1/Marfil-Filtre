<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use App\http\Controllers\MarfilController;
use App\http\Controllers\HizmetlerController;
use App\http\Controllers\ProductController;
use App\http\Controllers\AdminController;
use App\http\Controllers\ImageController;




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
Route::redirect('/', 'tr');

Route::group(['prefix' => '{language}'  ], function(){


    Route::get('/', function () {


      return view('welcome');
            } );


          Route::get('/hakkimizda', 'App\Http\Controllers\MarfilController@hakkimizda')->name('hakkimizda');
          Route::get('/iletisim', 'App\Http\Controllers\MarfilController@iletisim')->name('iletisim');
          Route::get('/kunye', 'App\Http\Controllers\MarfilController@kunye')->name('kunye');
          Route::get('/sikayet', [HizmetlerController::class, 'sikayet'])->name('sikayet');
          Route::get('/garanti',  [HizmetlerController::class, 'garanti'])->name('garanti');
          Route::get('/kalite',  'App\Http\Controllers\MarfilController@kalite')->name('kalite');
          Route::get('/teklifal',  [HizmetlerController::class, 'teklifal'])->name('teklifal');

          Route::get('/urunler', 'App\Http\Controllers\ProductController@product')->name('urunler');
          Route::get('/detail/{slug}',   'App\Http\Controllers\ProductController@detail')->name('detail');

          Route::get('/sil/{id}',   'App\Http\Controllers\AdminController@deletelink')->name('deletelink');

          Route::get('/galery',   'App\Http\Controllers\AdminController@galery')->name('galery');




          Route::get('/dil-ekle/{slug}','App\Http\Controllers\AdminController@dilekle')->name('dil-ekle');

          Route::post('/dil-ekle/ekle', 'App\Http\Controllers\AdminController@dileklendi')->name('dil-eklendi');

          Route::get('/kategori/{slug}' , 'App\Http\Controllers\ProductController@category')->name('listele');

          Route::post('/image/add' , 'App\Http\Controllers\ImageController@addimage')->name('addimage');
          Route::get('/delete/image/{id}' , 'App\Http\Controllers\ImageController@deleteimage')->name('deleteimage');


           Route::get('/foo', function () {
          Artisan::call('storage:link');
             });



  });




  Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




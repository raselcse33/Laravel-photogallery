<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[
  'uses'=>'PhotoController@index',
  'as'=>'index'

]);


   Route::get('/cetagory/list/{id}',[
         'uses'=>'PhotoController@list',
         'as'=>'category.list'


   ]);

   Route::get('/details/image/{id}',[
    'uses'=>'PhotoController@details',
    'as'=>'details.image'
   ]);


   Route::get('/image/details/{id}',[
    'uses'=>'PhotoController@details',
     'as'=>'image.details'
   ]);


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');




Route::group(['middleware'=>'auth'],function(){
   
   Route::get('store/gallay',[
   	   'uses'=>'GallaryController@store',
   	   'as'=>'store.gallary'

   ]);

   Route::post('/gallary/insert',[
   	 'uses'=>'GallaryController@imageinsert',
   	 'as'=>'gallary.insert'

   ]);

   Route::get('/home',[
    'uses'=>'GallaryController@index',
    'as'=>'home'

   ]);

   Route::get('/image/edit/{id}',[
    'uses'=>'GallaryController@edit',
    'as'=>'image.edit'

   ]);

   Route::post('/image/update/{id}',[

    'uses'=>'GallaryController@imageupdate',
    'as'=> 'image.update'

   ]);

   Route::get('/image/delete/{id}',[
        'uses'=>'GallaryController@imagedelete',
        'as'=>'image.delete'
   ]);

	  

});



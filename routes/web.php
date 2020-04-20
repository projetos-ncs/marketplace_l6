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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/model',function(){
   // $products = \App\Product::all();

   $user = \App\User::find(10);
   $store = $user->store()->create([
        'name' => 'Loja Teste',
        'description'=> 'Loja teste de produtos de informatica',
        'mobile_phone' => 'xx=xxxxx-xxxx',
        'phone' => 'xx=xxxxx-xxxx',
        'slug'=>'loja-teste'
   ]);
  
    return $user->store;

    return \App\User::all();
});

//Route::get('/admin/stores', 'Admin\\StoreController@index');
//Route::get('/admin/stores/create', 'Admin\\StoreController@create');
//Route::post('/admin/stores/store', 'Admin\\StoreController@store');


Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

    Route::prefix('stores')->name('stores.')->group(function(){

        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('/store', 'StoreController@store')->name('store');
        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        Route::post('/update/{store}', 'StoreController@update')->name('update');
        Route::post('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    });

    Route::resource('products', 'ProductController');

});


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

Route::get('about', function () {
    $name = 'Jonas';
    $number = 'ABC123';
    $speed = 121;

    $params = [
        'name' => $name,
        'number' => $number,
        'speed' => $speed
    ]; //paprastas užrašymas

    /*$params = compact('name', 'number', 'speed'); //compact užrašymas*/
    return view('about', $params);
});

Route::get('radars', 'RadarsController@index');
$radars = DB::table('radars')->get();

/*Route::get('radars.index', function () {
    $radars = [
    ['number'=>'ABC001','speed'=>121],
    ['number'=>'BBB111','speed'=>131],
    ['number'=>'ABA111','speed'=>151]
    ];

    $radars = DB::table('radars')->get();

    return view ('radars', compact ('radars'));
    
});*/

/*Route::get('radar/{id}', function ($id) {
    $radar = DB::table('radars')->find($id);
    return view('radar', compact('radar'));
    });*/

    /*Route::get('radars.index', function () {
          
        $radars = DB::table('radars')->get();
    
        return view ('radars', compact ('radars'));
        
    });*/
    
    /*Route::get('driver/{id}', function ($id) {
        $radar = DB::table('drivers')->find($id);
        return view('driver', compact('driver'));
        });*/

    /*Route::get('radars', 'RadarsController@index');
    $radars = DB::table('radars')->get();

    Route::get('radars/create','RadarsController@create');
    Route::post('radars','RadarsController@store');*/

    Route::get('radars', 'RadarsController@index');
    Route::get('radars/create', 'RadarsController@create');
    Route::post('radars', 'RadarsController@store');
    Route::get('radars/{radar}', 'RadarsController@show');
    Route::get('radars/{radar}/edit', 'RadarsController@edit');
    Route::put('radars/{radar}', 'RadarsController@update');
    Route::delete('radars/{radar}', 'RadarsController@destroy');
    
    Route::get('drivers', 'DriversController@index');
    Route::get('drivers/create', 'DriversController@create');
    Route::post('drivers', 'DriversController@store');
    Route::get('drivers/{driver}', 'DriversController@show');
    Route::get('drivers/{driver}/edit', 'DriversController@edit');
    Route::put('drivers/{driver}', 'DriversController@update');
    Route::delete('drivers/{driver}', 'DriversController@destroy');
    
    
    


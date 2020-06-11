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
Route::group(['middleware' => ['web','admin']], function () {
  Route::get('/adminpanel/bu/data',['as'=>'adminpanel.bu.data','uses'=>'BuController@anyData']);
  Route::get('/adminpanel/bu/{id}/destroy','BuController@destroy');
  Route::resource('/adminpanel/bu','BuController');


  Route::get('/adminpanel/users/data',['as'=>'adminpanel.users.data','uses'=>'UsersController@anyData']);

  Route::get('/adminpanel','AdminController@index');
  Route::resource('/adminpanel/users','UsersController');
  Route::post('/adminpanel/users/changePassword','UsersController@updatePassword');
  Route::get('/adminpanel/users/{id}/delete','UsersController@destroy');

  Route::get('/adminpanel/sitesetting','SiteSettingController@index');
  Route::post('/adminpanel/sitesetting','SiteSettingController@store');




});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/showAllBuilding','BuController@showAll');
Route::get('/forRent','BuController@forRent');
Route::get('/forBuy','BuController@forBuy');
Route::get('/type/{typ}','BuController@showByType');



Route::get('/home', 'HomeController@index')->name('home');

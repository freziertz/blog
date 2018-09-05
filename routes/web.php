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
    return view('about');
});

Route::group(['middleware' => ['web']], function(){

	Route::group(['prefix' => 'users'], function(){

	Route::get('change-password', function(){
		echo 'change password';
	});

	Route::get('profile', function(){
		echo 'profile view';
	});
	Route::post('profile', function(){
		echo 'profile';
	});
});


	Route::get('/users/{id}/posts/{posti}', function($id,$postId){
		echo $id. ' ' . $postId;
	});
});

//Naming route
Route::group(['middleware' => ['web']], function(){

	Route::get('/redirect', function(){
		return redirect()->route('landing');

	});
	Route::get('/landing/page', function(){
		echo 'landing';
	})->name('landing');

});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
//Controller route
Route::middleware(['auth'])->group(function(){
	Route::resource('companies', 'CompaniesController');
	Route::get('projects/create/{company_id?}', 'ProjectsController@create');
	Route::resource('projects', 'ProjectsController');
	Route::resource('roles', 'RolesController');
  Route::resource('comments', 'CommentsController');
	Route::resource('tasks', 'TasksController');
	Route::resource('users', 'UsersController');
});


Route::group(['middleware' => ['web']], function(){

	Route::get('/party', [
	'as'=>'party',
	'uses'=> 'PartyController@index',


	]);


});

	/* Route::group(['middleware' => ['web']], function(){

		Route::get('/companies', [
				'as'=>'companies',
				'uses'=> 'CompaniesController@index',


		]);


	}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

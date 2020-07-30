<?php

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

Route::get('/', 'IndexController@index')->name('index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/contact-me', 'IndexController@contactMe')->name('contact.me');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function() {
    // All the admin routes will defined here...
    Route::match(['get', 'post'], '/', 'AdminController@login')->name('login');
	
	Route::group(['middleware' => ['admin']], function() {
	    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
	    Route::get('settings', 'AdminController@settings')->name('settings');
	    Route::get('logout', 'AdminController@logout')->name('logout');

	    // Update Admin Password
	    Route::post('/check-current-password', 'AdminController@checkCurrentPwd');
	    Route::post('/update-current-password', 'AdminController@updatePassword')
	    	->name('update.password');

	    // Update Admin Details
	    Route::post('/update-admin-details', 'AdminController@updateAdminDetails');
	    Route::get('/remove-admin-image', 'AdminController@removeAdminImage')->name('remove.image');

	    // My Information
	    Route::resource('/infos', 'MyInfoController');

	    // My Education
	    Route::resource('/education', 'EducationController');

	    // My Experience
	    Route::resource('/experience', 'ExperienceController');

	    // My Clients Review & Feedbacks
	    Route::resource('/feedbacks', 'ClientReviewController');
	});
});

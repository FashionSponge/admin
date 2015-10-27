<?php
error_reporting(1);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/******************************************************************************************************************
 ******************************************************************************************************************
 ** ROUTE NAMES TO BE CHANGE TO THE CORRECT NAME AND ROUTES *******************************************************
 ******************************************************************************************************************
 ******************************************************************************************************************
 ******************************************************************************************************************
 */

// Authentication routes...
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Logout
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Registration routes...
 Route::get('/register', 'Auth\AuthController@getRegister');
 Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Home
Route::get('home', [
    'as' => 'route_dashboard_home', 'uses' => 'DashboardController@index'
]);

// Dashboard
Route::get('dashboard', [
    'as' => 'route_dashboard', 'uses' => 'DashboardController@index'
]);



// Manage
Route::get('manage', [
    'as' => 'route_manage', 'uses' => 'ManageController@index'
]);

// Billing, Payment
Route::get('billing', [
    'as' => 'route_belling', 'uses' => 'BillingController@index'
]);
Route::get('payment', [
    'as' => 'route_payment', 'uses' => 'PaymentController@index'
]);

// Settings, Account
Route::get('settings', [
    'as' => 'route_settings', 'uses' => 'SettingsController@index'
]);
Route::get('account', [
    'as' => 'route_account', 'uses' => 'AccountController@index'
]);

// Help, Documentation
Route::get('help', [
    'as' => 'route_help', 'uses' => 'HelpController@index'
]);
Route::get('documentation', [
    'as' => 'route_documentation', 'uses' => 'DocumentationController@index'
]);

// Slot
Route::get('ad-slot', [
    'as' => 'route_ad_slot', 'uses' => 'SlotController@index'
]);

// User change password
Route::POST('changePass', [
    'as' => 'route_postChangePass', 'uses' => 'UserController@postChangePass'
]);

// Ad reports and status
Route::get('ad/stat/query/{stat?}', [
    'as' => 'route_ad_getStat', 'uses' => 'AdController@getStat'
]);

Route::get('ad/break-down/query/{stat?}', [
    'as' => 'route_ad_breakDown', 'uses' => 'AdController@breakDown'
]);

Route::get('ad/ecpm/query/{stat?}', [
    'as' => 'route_ad_effectiveCostPerMile', 'uses' => 'AdController@effectiveCostPerMile'
]);

Route::get('ad/top-performing-pages/query/{stat?}', [
    'as' => 'route_ad_topPerformingPages', 'uses' => 'AdController@topPerformingPages'
]);

Route::get('ad/pagination/query/{stat?}', [
    'as' => 'route_ad_pagination', 'uses' => 'AdController@pagination'
]);

Route::get('ad/header-status/query/{stat?}', [
    'as' => 'route_ad_headerStatus', 'uses' => 'AdController@headerStatus'
]);

// API iTunes and Android
Route::get('api/iTune/search/{stat?}', [
    'as' => 'route_api_iTune_search', 'uses' => 'ApiITuneController@search'
]);
Route::get('api/android/search/{stat?}', [
    'as' => 'route_api_android_search', 'uses' => 'ApiAndroidController@search'
]);

Route::get('brand/{category?}/{gender?}', [
    'as' => 'route_brand', 'uses' => 'BrandController@index'
]);




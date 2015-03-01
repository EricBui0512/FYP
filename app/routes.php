<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('role', 'Role');
Route::model('country', 'Country');
Route::model('city', 'City');
Route::model('address', 'Address');
Route::model('outlet', 'Outlet');

/** ------------------------------------------
 *  Route constraint patterns
 *  ------------------------------------------
 */
Route::pattern('user', '[0-9]+');
Route::pattern('role', '[0-9]+');
Route::pattern('outlet', '\d+');
Route::pattern('retailer', '\d+');
Route::pattern('service', '\d+');
Route::pattern('token', '[0-9a-z]+');

Route::filter('role', function( $route, $request, $value ) {

    $roles = func_get_args();
    array_shift($roles);
    array_shift($roles);

    if ( Auth::user()->user_type !== $roles[0] ) {

        return App::abort( 403 );
    }

});

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{

    # User Management
    Route::get('users/{user}/show', 'AdminUsersController@getShow');
    Route::get('users/{user}/edit', 'AdminUsersController@getEdit');
    Route::post('users/{user}/edit', 'AdminUsersController@postEdit');
    Route::get('users/{user}/delete', 'AdminUsersController@getDelete');
    Route::post('users/{user}/delete', 'AdminUsersController@postDelete');
    Route::controller('users', 'AdminUsersController');

    # User Role Management
    Route::get('roles/{role}/show', 'AdminRolesController@getShow');
    Route::get('roles/{role}/edit', 'AdminRolesController@getEdit');
    Route::post('roles/{role}/edit', 'AdminRolesController@postEdit');
    Route::get('roles/{role}/delete', 'AdminRolesController@getDelete');
    Route::post('roles/{role}/delete', 'AdminRolesController@postDelete');
    Route::controller('roles', 'AdminRolesController');

    # Country Management
    Route::get('countries/create', 'AdminCommonController@getCountryCreate');
    Route::post('countries/create', 'AdminCommonController@postCountryCreate');
    Route::get('countries/{country}/edit', 'AdminCommonController@getCountryEdit');
    Route::post('countries/{country}/edit', 'AdminCommonController@postCountryEdit');
    Route::get('countries/{country}/delete', 'AdminCommonController@getCountryDelete');
    Route::post('countries/{country}/delete', 'AdminCommonController@postCountryDelete');
    Route::get('countries/data', 'AdminCommonController@getCountries');
    Route::controller('countries', 'AdminCommonController');

    # City Management
    Route::get('cities/create', 'AdminCommonController@createCity');
    Route::post('cities/create', 'AdminCommonController@storeCity');
    Route::get('cities/{city}/edit', 'AdminCommonController@editCity');
    Route::post('cities/{city}/edit', 'AdminCommonController@updateCity');
    Route::get('cities/{city}/delete', 'AdminCommonController@deleteCity');
    Route::post('cities/{city}/delete', 'AdminCommonController@destroyCity');
    Route::get('cities/data', 'AdminCommonController@getCities');
    Route::get('cities', 'AdminCommonController@listCity');
    Route::get('cities/html/{countryId}', 'AdminCommonController@getHtmlCity')
        ->where( 'countryId', '\d+');

     # Address Management
    Route::get('addresses/create', 'AdminCommonController@createAddress');
    Route::post('addresses/create', 'AdminCommonController@storeAddress');
    Route::get('addresses/{address}/edit', 'AdminCommonController@editAddress');
    Route::post('addresses/{address}/edit', 'AdminCommonController@updateAddress');
    Route::get('addresses/{address}/delete', 'AdminCommonController@deleteAddress');
    Route::post('addresses/{address}/delete', 'AdminCommonController@destroyAddress');
    Route::get('addresses/data/{countryId}/{cityId}', 'AdminCommonController@getAddresses')
        ->where('cityId', '\d+')->where('countryId','\d+');
    Route::get('addresses', 'AdminCommonController@listAddress');
    
    Route::get('outlets/data', 'AdminOutletsController@getData');
    Route::resource('outlets', 'AdminOutletsController');

    Route::get('retailers/data', 'AdminRetailerController@getData');
    Route::get('retailers/{retailerId}/delete', 'AdminRetailerController@getData');
    Route::resource('retailers', 'AdminRetailerController');

    # Service Management
    Route::get('services/create', 'AdminRetailerController@createService');
    Route::post('services/create', 'AdminRetailerController@storeService');
    Route::get('services/{service}/edit', 'AdminRetailerController@editService');
    Route::post('services/{service}/edit', 'AdminRetailerController@updateService');
    Route::get('services/{service}/delete', 'AdminRetailerController@deleteService');
    Route::post('services/{service}/delete', 'AdminRetailerController@destroyService');
    Route::get('services/data/{outletId}', 'AdminRetailerController@getServicees')
        ->where('cityId', '\d+')->where('countryId','\d+');
    Route::get('services', 'AdminRetailerController@listService');

    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');

});


Route::group(array('before' => 'auth|role:retailer'), function()
{
    Route::get('user/dashboard','UserController@getDasboard');
    
    Route::resource('retailer', 'RetailersController');

    Route::resource('outlet', 'OutletsController');

    # Service manager
    Route::get('service/create', array( 'as' => 'service.create', 'uses' => 'RetailersController@createService'));
    Route::post('service', array( 'as' => 'service.create', 'uses' => 'RetailersController@storeService'));
    Route::get('service/{service}/edit', array( 'as' => 'service.edit', 'uses' => 'RetailersController@editService'));
    Route::put('service/{service}', array( 'as' => 'service.edit', 'uses' => 'RetailersController@updateService'));
    Route::delete('service/{service}', array( 'as' => 'service.delete', 'uses' => 'RetailersController@destroyService'));
    Route::get('service', array( 'as' => 'service.index', 'uses' => 'RetailersController@listService'));
    #outlet manager
    Route::get('outlet/create', array( 'as' => 'outlet.create', 'uses' => 'OutletsController@create'));

    Route::get('outlet/list', array( 'as' => 'outlet.list', 'uses' => 'OutletsController@getList'));
    Route::get('outlet/detail/{id}', array( 'as' => 'outlet.detail', 'uses' => 'OutletsController@show'));
     #deals manager
    Route::get('deals/create', array( 'as' => 'outlet.create', 'uses' => 'RetailersController@createDeals'));
   
});

Route::group( array( 'before' => 'auth|role:user'), function() {


    Route::get( 'deal', array('as' => 'deal.index', 'uses' => 'ConsumersController@listDeal'));
    Route::get( 'deal/{outletId}', array('as' => 'deal.crate', 'uses' => 'ConsumersController@createDeal'))->where( 'outletId', '\d+');
    Route::post( 'deal/{outletId}', array('as' => 'deal.crate', 'uses' => 'ConsumersController@storeDeal'))->where( 'outletId', '\d+');
   
    Route::delete( 'deal/{id}', array('as' => 'deal.cancel', 'uses' => 'ConsumersController@cancelDeal'))->where( 'id', '\d+');

});



/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

// User reset routes
Route::get('user/reset/{token}', 'UserController@getReset');
// User password reset
Route::post('user/reset/{token}', 'UserController@postReset');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit');

//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

//:: Sign up Routes ::
Route::get('user/signup', 'UserController@Signup');
//:: create user Routes::
Route::get('user/create/{type}', 'UserController@userCreate');
# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

//:: Application Routes ::

# Filter for detect language
Route::when('contact-us','detectLang');

# Contact Us Static Page
Route::get('contact-us', function()
{
    // Return about us page
    return View::make('site/contact-us');
});

# Index Page - Last route, no matches
Route::get('/', array('before' => 'detectLang','uses' => 'SiteController@getIndex'));

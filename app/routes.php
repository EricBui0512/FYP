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
Route::model('service', 'Service');
Route::model('company', 'Company');
Route::model('page', 'Page');

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

    if ( ! in_array( Auth::user()->user_type, $roles ) ) {

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
    
    // Route::get('outlets/data', 'AdminOutletsController@getData');
    // Route::resource('outlets', 'AdminOutletsController');

    // outlet manage
    Route::get('outlets', 'AdminOutletsController@index');
    Route::get('outlets/{outlet}/edit', 'AdminOutletsController@edit');
    Route::post('outlets/{outlet}/edit', 'AdminOutletsController@update');
    Route::get('outlets/{outlet}/delete', 'AdminOutletsController@delete');
    Route::post('outlets/{outlet}/delete', 'AdminOutletsController@destroy');
    Route::get('outlets/data', 'AdminOutletsController@getData');


    Route::get('retailers/data', 'AdminRetailerController@getData');
    Route::post('retailers/{retailerId}/edit', 'AdminRetailerController@update');
    Route::get('retailers/{retailerId}/delete', 'AdminRetailerController@delete');
    Route::post('retailers/{retailerId}/delete', 'AdminRetailerController@destroy');
    Route::resource('retailers', 'AdminRetailerController');

    # Service Management
    // Route::get('services/create', 'AdminRetailerController@createService');
    // Route::post('services/create', 'AdminRetailerController@storeService');
    Route::get('services/{service}/edit', 'AdminRetailerController@editService');
    Route::post('services/{service}', 'AdminRetailerController@updateService');
    Route::get('services/{service}/delete', 'AdminRetailerController@deleteService');
    Route::post('services/{service}/delete', 'AdminRetailerController@destroyService');
    Route::get('services/data', 'AdminRetailerController@getDataService');
    Route::get('services', 'AdminRetailerController@listService');

     # Deal Management
    Route::get('deals/{deal}/edit', 'AdminRetailerController@editDeal');
    Route::post('deals/{deal}', 'AdminRetailerController@updateDeal');
    Route::get('deals/{deal}/delete', 'AdminRetailerController@deleteDeal');
    Route::post('deals/{deal}/delete', 'AdminRetailerController@destroyDeal');
    Route::get('deals/data', 'AdminRetailerController@getDataDeal');
    Route::get('deals', 'AdminRetailerController@listDeal');
    Route::get('deals/active/{id}', 'AdminRetailerController@activeDeal');
    Route::get('deals/featured/{id}', 'AdminRetailerController@featuredDeal');

    // page resource
    Route::get('pages', 'AdminSettingController@index');
    Route::get('pages/create', 'AdminSettingController@create');
    Route::post('pages/create', 'AdminSettingController@store');
    Route::get('pages/{page}/edit', 'AdminSettingController@edit');
    Route::post('pages/{page}', 'AdminSettingController@update');
    Route::get('pages/{page}/delete', 'AdminSettingController@delete');
    Route::post('pages/{page}/delete', 'AdminSettingController@destroy');
    Route::get('pages/data', 'AdminSettingController@getPages');
    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');

});
Route::group(array('before' => 'auth|role:retailer,user'), function(){
    Route::post('outlet/uploadimage', array( 'as' => 'outlet.uploadimage', 'uses' => 'OutletsController@uploadimage'));
});

Route::group(array('before' => 'auth|role:retailer'), function()
{
    Route::get('retailer/dashboard',array('as' => 'retailer.dashboard', 'uses'=>'RetailersController@getDashboard'));
    
    Route::resource('retailer', 'RetailersController');

    Route::resource('outlet', 'OutletsController');

    # Service manager
    Route::get('service/create', array( 'as' => 'service.create', 'uses' => 'RetailersController@createService'));
    // Route::post('service/create', array( 'as' => 'service.create', 'uses' => 'RetailersController@storeService'));
    Route::get('service/{service}/edit', array( 'as' => 'service.edit', 'uses' => 'RetailersController@editService'));
    Route::post('service/{service}', array( 'as' => 'service.edit', 'uses' => 'RetailersController@updateService'));
    Route::post('service/delete', array( 'as' => 'service.delete', 'uses' => 'RetailersController@destroyService'));
    Route::get('service', array( 'as' => 'service.index', 'uses' => 'RetailersController@listService'));
    #outlet manager
    Route::get('outlet/create', array( 'as' => 'outlet.create', 'uses' => 'OutletsController@create'));
    Route::post('outlet/create', array( 'as' => 'outlet.create', 'uses' => 'OutletsController@create'));
    Route::post('outlet/{outlet}', 'OutletsController@update');

    Route::post('outlet/delete', array( 'as' => 'outlet.delete', 'uses' => 'OutletsController@destroy'));
    Route::get('outlet', array( 'as' => 'outlet.list', 'uses' => 'OutletsController@getList'));

    #deals manager
    Route::get('deal', array('as'=> 'deal.index','uses' => 'OutletsController@listDeal'));
    Route::get('deal/create', 'OutletsController@createDeal');
    Route::post('deal/create','OutletsController@storeDeal');
    Route::get('deal/{deal}/edit', 'OutletsController@editDeal');
    Route::post('deal/{deal}/edit','OutletsController@updateDeal');
    Route::get('deal/tran/{deal}','OutletsController@listTranByDeal');
    Route::get('deal/charts/{type}','OutletsController@getChartsData');
    Route::get('deal/cancellation','OutletsController@cancellationDeal');
    Route::post('deal/delete', array( 'as' => 'deal.delete', 'uses' => 'OutletsController@destroyDeal'));

     # Address Management
    Route::get('address/create', array( 'as' => 'address.create', 'uses' =>'RetailersController@createAddress'));
    Route::post('address/create', array( 'as' => 'address.create', 'uses' =>'RetailersController@storeAddress'));
    Route::get('address/{address}/edit', array( 'as' => 'address.edit', 'uses' =>'RetailersController@editAddress'));
    Route::post('address/{address}/edit', array( 'as' => 'address.edit', 'uses' =>'RetailersController@updateAddress'));
    Route::get('addresses/{address}/delete', array( 'as' => 'address.delete', 'uses' =>'RetailersController@deleteAddress'));
    Route::post('address/{address}/delete', array( 'as' => 'address.delete', 'uses' =>'RetailersController@destroyAddress'));
    Route::get('address/get/{countryId}/{cityId}', array( 'as' => 'address.get', 'uses' =>'RetailersController@getAddresses'))
        ->where('cityId', '\d+')->where('countryId','\d+');
    Route::get('address', array( 'as' => 'address.list', 'uses' =>'RetailersController@listAddress'));
});

Route::group( array( 'before' => 'auth|role:user'), function() {
    // Route::resource('purchase', 'PurchaseController');
    Route::get('user/dashboard',array('as' => 'user.dashboard','uses' => 'ConsumersController@getDashboard'));
    Route::get('transaction', 'ConsumersController@listTrans');
    Route::post('transaction/cancel', 'ConsumersController@cancelTrans');  
    Route::post('payment', array('as' => 'payment','uses' => 'PaymentController@postPayment'));
    // this is after make the payment, PayPal redirect back to your site
    Route::get('payment/status', array('as' => 'payment.status','uses' => 'PaymentController@getPaymentStatus'));
    Route::get('user/transaction', array('as' => 'user.transaction','uses' => 'ConsumersController@getTrans'));
    Route::get('user/transaction/edit/{id}', array('as' => 'user.transaction','uses' => 'PurchaseController@editBill'));
    Route::post('user/transaction/edit', array('as' => 'user.transaction','uses' => 'PurchaseController@updateBill'));
    Route::get('purchase/pay/{id}','PurchaseController@payBill');
    Route::get('user/profile/{username}', 'UserController@getProfile');
    Route::get('user/profile/{username}/edit', 'UserController@getEdit');
    //:: User Account Routes ::
    Route::post('user/{user}/edit', 'UserController@postEdit');

});

/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */
// 
Route::post('user/book','UserController@postBook');
Route::get('user/getSpaLocations','UserController@getSpaLocations');
Route::get('user/getServiceNames','UserController@getServiceNames');
Route::get('user/getTimeSlot','UserController@getTimeSlot');
Route::post('purchase/pay','PurchaseController@createBill');
Route::get('purchase/{id}', 'PurchaseController@getBill');

// Site reset routes
Route::post('/search', 'SiteController@getSearch');
// Site reset routes
Route::get('/detail/{id}', 'SiteController@getDetail');
// User reset routes
Route::get('user/reset/{token}', 'UserController@getReset');
// User password reset
Route::post('user/reset/{token}', 'UserController@postReset');

//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

//:: Sign up Routes ::
Route::get('user/signup', 'UserController@signup');
Route::post('purchase/login', 'UserController@loginBeforePuchase');
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

Route::get('dashboard','UserController@getDashboard');
   
# Index Page - Last route, no matches
Route::get('/', array('before' => 'detectLang','uses' => 'SiteController@getIndex'));
Route::post('/getCities', array('before' => 'detectLang','uses' => 'SiteController@postGetCities'));

Route::get('transaction/create', 'ConsumersController@createTrans');
Route::post('transaction', 'ConsumersController@storeTrans');
Route::post('image/delete', array( 'as' => 'image.delete', 'uses' => 'OutletsController@deleteImage'));
Route::get('cities/html/{countryId}', 'SiteController@getHtmlCity');
Route::get('names', 'SiteController@getListName');
Route::get('helper/{slug}', 'SiteController@getPage');

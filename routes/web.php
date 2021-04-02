<?php
/*
 * Admin Routes
 */
Route::prefix('admin')->group(function() {

    Route::middleware('auth:admin')->group(function() {
        // Dashboard
        Route::get('/', 'DashboardController@index');

        // Categories
        Route::post('/categories/category/add', 'CategoryController@store');
        Route::get('/categories/category', 'CategoryShowController@index');
        Route::get('/categories/addcategory', 'CategoryController@index');

        // location
        Route::post('/locations/location/add', 'LocationController@store');
        Route::get('/locations/location', 'LocationShowController@index');
        Route::get('/locations/addlocation', 'LocationController@index');

        // Users
        Route::resource('/users','UsersController');

        // Logout
        Route::get('/logout','AdminUserController@logout');

    });

    // Admin Login
    Route::get('/login', 'AdminUserController@index');
    Route::post('/login', 'AdminUserController@store');
});

// Front User routes
Route::prefix('front')->group(function() {
    Route::middleware('auth:web')->group(function(){
        
        //Add Product
        Route::get('/postadd/postad', 'PostAddController@index');
        //sale
        Route::post('/postadd/sale/add', 'SaleController@store');
        Route::get('/postadd/sale', 'SaleController@index');
        //donation
        Route::post('/postadd/donation/add', 'DonationController@store');
        Route::get('/postadd/donation', 'DonationController@index');
        


    });
});

/*
 * Front Routes
 */

Route::get('/', 'Front\HomeController@index');

// User Registration
Route::get('/user/register','Front\RegistrationController@index');
Route::post('/user/register','Front\RegistrationController@store');

// User Login
Route::get('/user/login','Front\SessionsController@index');
Route::post('/user/login','Front\SessionsController@store');

// Logout
Route::get('/user/logout','Front\SessionsController@logout');

Route::get('/user/profile', 'Front\UserProfileController@index');



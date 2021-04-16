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
        Route::get('/categories/delete/{id}','CategoryShowController@destroy');


        // location
        Route::post('/locations/location/add', 'LocationController@store');
        Route::get('/locations/location', 'LocationShowController@index');
        Route::get('/locations/addlocation', 'LocationController@index');
        Route::get('/locations/delete/{id}','LocationShowController@destroy');


        //sales product
        Route::get('/salesNdons/sale', 'SaleProcuctController@index');
        Route::get('/salesNdons/saledelete/{id}','SaleProcuctController@destroy');


        // Donation Product
        Route::get('/salesNdons/donation', 'DonationProcuctController@index');
        Route::get('/salesNdons/delete/{id}','DonationProcuctController@destroy');

        // Users
        Route::resource('/users','UsersController');
        // Route::get('/users/index', 'UsersController@index');

        //Editing user details
        Route::get('/users/edituser/{id}','UsersController@edit');
        // Route::get('/users/edituser','UsersController@edit');
        Route::put('/users/updateuser/{id}','UsersController@update');
        Route::get('/users/deleteuser/{id}','UsersController@deleteuser');

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
        
        //user profile
        Route::get('/profile/updateprofile/{id}','UpdateUserProfileController@index');
        Route::get('/profile/edituser/{id}','UpdateUserProfileController@edit');
        Route::put('/profile/updateuser/{id}','UpdateUserProfileController@update');
        Route::get('/profile/deleteuser/{id}','UpdateUserProfileController@destroy');

        //My ads
        Route::get('/profile/myad/{id}','MyAdController@index');
        // Route::get('/profile/myad/{id}', 'MyAdController@show');

        // Sale Product edit and delete
        Route::get('/profile/editproduct/{id}','EditProductController@index');
        // Route::get('/profile/editprod/{id}','EditProductController@edit');
        Route::put('/profile/updateproduct/{id}','EditProductController@update');
        Route::get('/profile/deleteproduct/{id}','EditProductController@destroy');

        // Donation Product edit and delete
        Route::get('/profile/editdonproduct/{id}','EditDonProdController@index');
        Route::put('/profile/updatedonproduct/{id}','EditDonProdController@update');
        Route::get('/profile/deletedonproduct/{id}','EditDonProdController@destroy');

        // Change Password
        Route::get('/profile/changepw/{id}','ChangePwController@index');
        Route::get('/profile/editpw/{id}','ChangePwController@edit');
        Route::put('/profile/updatepw/{id}','ChangePwController@update');

        // display nearby products
        Route::get('/nearbyprod','NearbyProdController@index');

        // Display sale product details
        Route::get('/saledetail/{id}','SaleDetailController@index');

        // Display donation product details
        Route::get('/donationdetail/{id}','DonationDetailController@index');

        // Sale comment section
        Route::post('/comments/{id}','SaleDetailController@store');
        Route::get('/comments/delete/{id}','CommentController@destroy');
        Route::post('/replies/comment','ReplyCommentController@store');
        Route::get('/replies/delete/{id}','ReplyCommentController@destroy');

        // Sale comment section
        Route::post('/doncomments/{id}','DonationDetailController@store');
        Route::get('/doncomments/delete/{id}','CommentDonController@destroy');
        Route::post('/donreplies/comment','ReplyDonCommentController@store');
        Route::get('/donreplies/delete/{id}','ReplyDonCommentController@destroy');

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




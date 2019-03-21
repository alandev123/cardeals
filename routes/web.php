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

/*Route::get('/home', function () {    //home page is set from here
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
*/

Route::get('/', function () {    //index page is set from here
    return view('temp');         // now temp.blde.php is the index page , by default the welcome.blade.php is the index page
});
//Routes for Login
Route::resource('ulogin','LoginController');
// Route::get('/logincar', function () {
//     return view('login');
// });
Route::any('/ajaxview','ApproveCompanyController@ajaxview');
Route::get('/logout','LoginController@Logout');
Route::get('/logincar','LoginController@Logn');
//Routes for registration

/*Route::get('/userregistration', function () {   //userregistration is from href of home.blde.php
    return view('registration.userreg');     //userreg.blade.php is the page to be displayed. it is inside the registration folder
});
Route::resource('ureg','RegUserController');

Route::get('/manufacturerreg', function () {
    return view('registration.manufacturerreg');
});
Route::resource('creg','RegCompanyController');

Route::get('/dealerreg', function () {   //userregistration is from href of home.blde.php
    return view('registration.dealerreg');     //userreg.blade.php is the page to be displayed. it is inside the registration folder
});
Route::resource('dreg','RegDealerController');*/
//Registration
Route::get('/firstreg', function () {
    return view('registration.firstreg');
});
Route::resource('regf','FirstRegController');
Route::resource('regconfirm','RegCompanyController');

//Routes for Manufacturer
/*
Route::get('/companyhome','RouteController@companyhome');

*/
//Routes for admin module
//Route::get('/approvec','RouteController@approvec');
Route::get('/approvec','ApproveCompanyController@viewcompany');
Route::any('/approvecompany/{email}','ApproveCompanyController@approve');
Route::get('/addfeatures','RouteController@addfeatures');
Route::get('/addcar','RouteController@addcar');
Route::any('/caradd','AddCarController@store');
Route::get('/addfeat','AddFeatureController@companyname');
Route::any('/addfeature','AddFeatureController@store');
Route::get('/reset', function () {
    return view('registration.reset');
});
Route::any('/resetpwd','ResetController@reset');
Route::get('/companyhome','RouteController@companyhome');
Route::get('/cprofile','CprofileController@cprofile');
// Route::get('/cprofile', function () {
//     return view('Company.cprofile');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

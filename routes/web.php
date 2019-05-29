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

// Route::get('/', function () {    
//     return view('temp');         
// });
Route::get('/userhome',function()
{
    return view('User.userhome');
});
Route::any('/','AddAdController@home');
//Routes for Login
Route::resource('ulogin','LoginController');

Route::any('/ajaxview','ApproveCompanyController@ajaxview');
Route::get('/logout','LoginController@Logout');
Route::get('/logincar','LoginController@Logn');
Route::get('/firstreg', function () {
    return view('registration.firstreg');
});
Route::resource('regf','FirstRegController');
Route::resource('dregstore','FirstRegController');
Route::resource('regconfirm','RegCompanyController');
Route::get('/approvec','ApproveCompanyController@viewcompany');
Route::any('/approvecompany/{email}','ApproveCompanyController@approve');
Route::any('/blockcompany/{email}','ApproveCompanyController@block');
Route::any('/unblockcompany/{email}','ApproveCompanyController@unblock');
Route::get('/blockc','ApproveCompanyController@bcompany');
Route::get('/unblockc','ApproveCompanyController@unbcompany');
Route::get('/addfeatures','RouteController@addfeatures');
Route::get('/addcar','RouteController@addcar');
Route::any('/caradd','AddCarController@store');
Route::get('/addfeat','AddFeatureController@companyname');
Route::any('/addfeature','AddFeatureController@store');
Route::get('/reset', function () {
    return view('registration.reset');
});
Route::any('/usedcarhome','RouteController@usedcarhome');
Route::any('/sellcar','RouteController@sellcar');
Route::any('/sellcaradd','SellcarController@store');
Route::any('/searchcar','SellcarController@searchcar');
Route::any('/usedcarmoredet/{id}','SellcarController@viewmore');
Route::any('/usedcarmoredet1/{id}','SellcarController@viewmore1');
Route::any('/uviewcar','ViewcarController@newcarview');
Route::any('/resetpwd','ResetController@reset');
Route::get('/companyhome','RouteController@companyhome');
Route::get('/cprofile','CprofileController@cprofile');
Route::any('/companyviewcar','ViewcarController@viewcar');
Route::any('/listvarient','ViewcarController@carajax');
Route::any('/userlistvarient','ViewcarController@uservarientajax');
Route::any('/listmodel','ViewcarController@ucarajax');
Route::any('/listdets','ViewcarController@varajax');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/uhome', 'RouteController@uhome');
Route::get('/ucompare', 'RouteController@comparecompany');
Route::get('/advice', 'RouteController@advice');
Route::any('advicereq','UadviceController@advicereq');
Route::get('/dreg', function () {
    return view('Dealer.Dreg');
});
Route::group(['middleware' => 'revalidate'], function()
{

});
Route::any('/ads','AddCarController@ads');
Route::any('/addad','AddAdController@st');
Route::any('/adminad','AddAdController@viewad');
Route::any('/postad/{adid}','AddAdController@postad');
Route::any('/removead/{adid}','AddAdController@removead');
Route::any('/generateman','RegCompanyController@generateman');
Route::any('/generatelink1','RegCompanyController@generatelink1');
Route::any('/registrationinvite','RegCompanyController@registrationinvite');
Route::get('/adminhome', function () {
    return view('Admin.adminhome');
});
Route::any('/feature','AddAdController@features');
Route::any('/featuredadd','FeaturedController@store');
Route::any('/moread/{adid}','AddAdController@moread');
Route::any('/rviewcar','ViewcarController@newcarview1');
Route::any('/uusedcarhome','SellcarController@uusedcar');
Route::any('/usellcar','RouteController@usellcar');
Route::any('/usearchcar','SellcarController@searchcar');
Route::any('/vucar','SellcarController@usearchcar');
Route::any('/ucmore','RouteController@ucmore');
Route::any('/pricel','SellcarController@pricel');
Route::any('/priceh','SellcarController@priceh');
Route::any('/buyucar/{usedcar_id}','SellcarController@buyucar');
Route::any('/msgucar','SellcarController@msgucar');
Route::any('/mycars','SellcarController@mycars');
Route::any('/ucaraccept/{usedcar_id}','SellcarController@ucaraccept');
Route::any('/ucarreject','SellcarController@ucarreject');
Route::get('/ubookinghome', function () {
    return view('User.ubookinghome');
});
Route::any('/results','RatingController@results');
Route::any('/comments','RatingController@comments');
Route::any('/addrate','RatingController@addrate');
Route::any('/myreqs','SellcarController@myreqs');
Route::any('/invitedealer','DealerController@invite');
Route::any('/generatelink2','RegCompanyController@generatelink2');
Route::any('/cardealsinvite','DealerRegController@register');
Route::any('/regdealer','DealerRegController@store');
Route::any('/viewdealer','DealerRegController@viewdealer');
Route::any('/approvedealer','DealerRegController@approvedealer');
Route::any('/aprvdealer/{email}','DealerRegController@aprvdealer');
Route::any('/bookcar','DealerRegController@newcarview');
Route::any('/book','DealerRegController@book');
Route::any('/postbook','DealerRegController@postbook');
Route::any('/dbook','DealerRegController@dbook');
Route::any('/suggest','UadviceController@suggest');
Route::any('/myreq','UadviceController@myreq');
Route::any('/addsug/{adviceid}','UadviceController@addsug');
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
    return view('index');
});
// Route::get('/dashboard', function() {
//     return view('dashboard');
// });
Route::resource('dashboard','DashboardController'); // main dashboard route
Route::get('home','DashboardController@index')->name('dashboard');
//  Auth::routes();
Auth::routes(['verify' => true]);
// Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::resource('user', 'EditProfileController'); // to view and edit user profile

Route::resource('pay-reg-fee', 'RegFeeController'); // to redirect users who are yet to pay the reg fee

Route::post('upload', 'RegFeeController@upload')->name('upload'); // to upload the proof of reg fee paymennt

Route::resource('invest', 'ProvideHelpController'); //to call the provide helpo controller
Route::resource('harvest', 'GetHelpController'); // to call the get help controler

Route::resource('investment-details', 'InvestStatsController'); //to view matched investment details
Route::resource('harvest-details', 'HarvestStatsController'); //to view matched harvest details

Route::resource('backoffice', 'BackOfficeController'); // admin route
Route::get('regfee', 'BackOfficeController@viewfee'); // admin view reg fee upload route

Route::resource('support', 'SupportController'); //support route

Route::resource('referrals', 'ReferralsController'); //downline  route

Route::post('adminsaveph', 'ProvideHelpController@adminph'); // admin generating ph
Route::post('adminsavegh', 'GetHelpController@admingh'); // admin generating gh
Route::get('open-tickets', 'BackOfficeController@create'); //to view all open tickets
Route::get('active-users', 'BackOfficeController@active'); //to view all registered members

Route::post('paid', 'BackOfficeController@confirmregfee'); //to confirm payment of registration fee

Route::post('block', 'BackOfficeController@blockUser'); //to block a member
// Route::get('profile', function () {
//     // Only verified users may enter...
// })->middleware('verified');

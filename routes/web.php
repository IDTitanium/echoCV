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
Route::get('/', function () { return view('auth.login'); });

// Route::group(['middleware' => ['web','auth','admin','verified']], function () {
Route::get('/home', function () { return view('home.index'); });
// Route::get('/files', function () { return view('files.files'); });
Route::get('/file_upload', function () { return view('files.file_upload'); });
Route::get('/archives', function () { return view('archives.archives'); });
Route::get('/archivelist', function () { return view('archives.archivelist'); });
// Route::get('/company_list', function () { return view('portfolio_company.company_list'); });
// Route::get('/create_metrics', function () { return view('metrics.create'); });
Route::get('/add_metrics', function () { return view('metrics.add'); });
Route::get('/single_company', function () { return view('portfolio_company.single_company'); });
Route::get('/dashboard', function () { return view('home.dashboard'); });
Route::get('/new_company', function () { return view('portfolio_company.new_company'); });
Route::get('/add_company', function () { return view('portfolio_company.add_company'); });
Route::get('/funding', function () { return view('portfolio_company.funding'); });
Route::get('/dashboard1', function () { return view('home.dashboard1'); });
Route::get('/add_chart', function () { return view('home.add_chart'); });
Route::get('/export_report', function () { return view('home.export_report'); });
Route::get('/profile', function () { return view('account_settings.profile'); });
Route::get('/permissions', function () { return view('account_settings.permissions'); });
Route::get('/new_user', function () { return view('invites.new_user'); });
Route::get('/deleteFileModal', function () { return view('inc.deleteFileModal'); });
Route::get('/email_invite', function () { return view('email.email_invite'); });
Route::get('/investor_update', function () { return view('email.investor_update'); });

//close the middileware for client
// });

// Auth::routes(['verify' => true]);

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add_company', 'CompanyController@create')->name('create.company');
Route::get('/company_list', 'CompanyController@getData');
Route::post('/add_company', 'CompanyController@store')->name('store.company');
//Route for Contacts
Route::resource('contacts', 'ContactsController');
Route::delete('contacts', ['as'=>'contact.multiple-delete','uses'=>'ContactsController@deleteMultiple']);
// Route::resource('reports', 'ReportsController');
// Route::get('/received_report', 'ReportsController@received');
// Route::get('/sent_report', 'ReportsController@sent');
// Route::get('/scheduled_report', 'ReportsController@scheduled');
// Route::get('/new_report1', 'ReportsController@create');
// Route::get('/sample_report', 'ReportsController@sample');
// Route::get('/real_report', 'ReportsController@real');
// Route::post('/reports/', 'ReportsController@store');


// Route::get('/profile', 'ProfileController@profileindex');
// Route::post('ajax-profile-upload', 'ProfileController@ajaxImage');
// Route::post('/profile', 'ProfileController@profileupdate');
Route::get('/files', 'FileController@index')->name('file.index');
Route::post('/file/upload', 'FileController@store')->name('file.upload');
Route::post('/delete/file/{id}', 'FileController@delete')->name('file.delete');


//Route for Metrics
Route::resource('metrics', 'MetricsController');
Route::get('metrics_display', 'MetricsController@build');
Route::get('metrics_sheets', 'MetricsController@sheets');
Route::get('metrics_spreadsheets', 'MetricsController@spreadsheets');
Route::get('metrics_kpi/{id}', 'MetricsController@metricsKpi');
Route::get('metrics_single_kpi/{id}', 'MetricsController@metricsSingleKpi');
Route::delete('metrics_sheets', ['as'=>'metrics.multiple-delete','uses'=>'MetricsController@deleteMultipleMetrics']);


//****Importing and Exporting Excel sheets
Route::get('import-export', 'MetricsController@importExport');
Route::post('import', 'MetricsController@import')->name('import');
Route::get('export', 'MetricsController@export');

//Route for Reports
Route::resource('reports', 'ComposeMailController');
Route::get('/received_report', 'ComposeMailController@received');
Route::get('/sent_report', 'ComposeMailController@sent');
Route::get('/scheduled_report', 'ComposeMailController@scheduled');
Route::get('/sample_report', 'ComposeMailController@sample');
Route::get('/draft_report', 'ComposeMailController@draft');
// Route::post('/reports/', 'ComposeMailController@store');


//For google sheets
Route::get('google_test', 'MetricsController');
Route::post('post', 'PostController')->name('post.store');


// Route::group(['middleware' => ['web','auth','admin','verified']], function () {
// Route::get('/home', function () { return view('home.index'); });
// Route::get('/create', function () { return view('metrics.create'); });
// Route::get('/create1', function () { return view('metrics.'); });
// Route::get('/files', function () { return view('files.files'); });
// Route::get('/file_upload', function () { return view('files.file_upload'); });
// Route::get('/archives', function () { return view('archives.archives'); });
// Route::get('/archivelist', function () { return view('archives.archivelist'); });
// Route::get('/add_chart', function () { return view('home.add_chart'); });
// Route::get('/create_metrics', function () { return view('metrics.create'); });
// Route::get('/add_metrics', function () { return view('metrics.add'); });
// Route::get('/add_company', function () { return view('portfolio_company.add_company'); });
// Route::get('/dashboard', function () { return view('home.dashboard'); });
// Route::get('/new_company', function () { return view('portfolio_company.new_company'); });
// Route::get('/add_company', function () { return view('portfolio_company.add_company'); });
// Route::get('/dashboard1', function () { return view('home.dashboard1'); });
// Route::get('/add_chart1', function () { return view('home.add_chart1'); });
// Route::get('/profile', function () { return view('account_settings.profile'); });
// Route::get('/permissions', function () { return view('account_settings.permissions'); });

// Route::namespace('Auth')->group(function(){

//     //Login Routes
//     Route::get('/','LoginController@index')->name('login');
//     Route::post('/login','LoginController@login');
//     Route::post('/logout','LoginController@logout')->name('logout');
//     //Forgot Password Routes
//     Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
//     Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//     //Reset Password Routes
//     Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
//     Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
// });

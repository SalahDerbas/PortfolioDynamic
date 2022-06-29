<?php

use App\about;
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



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('/home', 'HomeController@index')->name('home');

//    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::resource('Skills', 'SkillsController');
    Route::resource('Educations', 'EducationController');
    Route::resource('Experiences', 'ExperinseController');
    Route::resource('Services', 'ServicesController');
    Route::resource('Clients', 'ClientController');
    Route::resource('CategoryP', 'PortfolioCategoryController');
    Route::resource('ItemsP', 'PortfolioitemController');
    Route::resource('Summary', 'SummaryController');
    Route::resource('About', 'AboutController');
    Route::resource('Contact', 'ContactController');
    Route::resource('Position', 'PositionContreller');

});


Route::post('/email', 'HomeController@sendEmail')->name('sendEmail');
Route::get('/myportfolio', 'HomeController@myportfolio')->name('myportfolio');
Route::get('/projectItems', 'PortfolioitemController@projectItems')->name('projectItems');


//Route::group(['middleware' => ['guest']], function () {
//
//    Auth::routes(['register' => false]);
//
//    Route::get('/', function () {
//        return view('auth.login');
//    });
//
//    Route::get('/home', 'HomeController@index')->name('home');
//    Route::get('/tables', function () {
//        return view('tables');
//    });
//
//});

//Route::get('/dashboard','DashboardController@index')->name('dashboard');
//Route::resource('Skills', 'SkillsController');
//Route::resource('Educations', 'EducationController');
//Route::resource('Experiences', 'ExperinseController');
//Route::resource('Services', 'ServicesController');
//Route::resource('Clients', 'ClientController');
//Route::resource('CategoryP', 'PortfolioCategoryController');
//Route::resource('ItemsP', 'PortfolioitemController');
//Route::resource('Summary', 'SummaryController');
//Route::resource('About', 'AboutController');
//Route::resource('Contact', 'ContactController');


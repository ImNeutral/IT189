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

Route::get('/', function(){
    return redirect('/basic-information');
});

Route::get('/basic-information',            'PagesController@basicInformation');
Route::post('/basic-information',           'PagesController@basicInformationCreate');

Route::get('/educational-attainment',       'PagesController@educationalAttainment');
Route::get('/work-experience',              'PagesController@workExperience');
Route::get('/productivity',                 'PagesController@productivity');
Route::get('/teaching-efficiency-rating',   'PagesController@teachingEfficiencyRating');
Route::get('/professional-growth',          'PagesController@professionalGrowth');
Route::get('/extra-academic-activities',    'PagesController@extraAcademicActivities');
Route::get('/extension-services',           'PagesController@extensionServices');

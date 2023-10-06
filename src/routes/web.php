<?php


Route::group(
    [
        'namespace'     =>  'Sonphait\LaravelSurveyJs\app\Http\Controllers',
        'middleware'    =>  config('survey-manager.route_middleware'),
        'prefix'        =>  config('survey-manager.route_prefix'),
    ],
    function () {
        Route::get('/index', 'SurveyController@index')->name('index');
        Route::get('/{surveySlug}', 'SurveyController@runSurvey')->name('survey-manager.run');
    }
);

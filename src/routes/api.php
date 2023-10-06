<?php


Route::group(
    [
        'namespace'     =>  'Sonphait\LaravelSurveyJs\app\Http\Controllers\API',
        'middleware'    =>  config('survey-manager.api_middleware'),
        'prefix'        =>  config('survey-manager.api_prefix'),
    ],
    function () {
        Route::resource('/survey/{surveyId}/result', 'SurveyResultAPIController', ['only' => 'store']);
    }
);

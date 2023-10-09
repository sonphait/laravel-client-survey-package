<?php
use Sonphait\LaravelSurveyJs\app\Http\Controllers\API\SurveyResultAPIController;


Route::group(
    [
        'middleware'    =>  config('survey-manager.api_middleware'),
        'prefix'        =>  config('survey-manager.api_prefix'),
    ],
    function () {
        Route::post('/survey/{surveyId}/result', [SurveyResultAPIController::class, 'store']);
    }
);

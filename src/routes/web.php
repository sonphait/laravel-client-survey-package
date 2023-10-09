<?php
use Sonphait\LaravelSurveyJs\app\Http\Controllers\SurveyController;

Route::group(
    [
        'middleware'    =>  config('survey-manager.route_middleware'),
        'prefix'        =>  config('survey-manager.route_prefix'),
    ],
    function () {
        Route::get('/index', [SurveyController::class, 'index'])->name('index');
        Route::get('/{surveySlug}', [SurveyController::class, 'runSurvey'])->name('survey-manager.run');
    }
);

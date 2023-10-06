<?php

namespace Sonphait\LaravelSurveyJs\app\Http\Controllers;

use Illuminate\Routing\Controller;
use Sonphait\LaravelSurveyJs\app\Models\Survey;

class SurveyController extends Controller
{
    /**
     * Show all available survey.
     */
    public function index()
    {
        return view('survey-manager::list', [
            'surveys' => Survey::all()
        ]);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function runSurvey($slug)
    {
        $survey = Survey::where('slug', $slug)->firstOrFail();

        return view('survey-manager::survey', [
            'survey'    =>  $survey,
        ]);
    }
}

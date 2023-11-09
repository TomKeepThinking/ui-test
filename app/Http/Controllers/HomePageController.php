<?php

namespace App\Http\Controllers;

class HomePageController extends Controller
{
    public function __invoke()
    {
        $pageHeader = 'Collection Management Software & Digital Design for Arts, Culture & Heritage';
        $firstContentHeader = 'Qi Collections Management';
        $firstContentText = 'Take control of your entire operations with customisable, integrable content & collections management system.';
        $secondContentHeader = 'Harnessing technology that helps to shape the way we experience culture & history';
        $work = [1,2,3,4,5,6];
        $thirdContentHeader = 'We’re a software and design agency operating for over twenty years';
        $thirdContentSubHeader = 'About us';
        $thirdContentText = 'Our diverse team of managers, engineers and designers work from our headquarters in London.';


        return view('pages.home', compact([
                'pageHeader',
                'firstContentHeader',
                'firstContentText',
                'secondContentHeader',
                'work',
                'thirdContentHeader',
                'thirdContentSubHeader',
                'thirdContentText'
            ]
        ));
    }
}

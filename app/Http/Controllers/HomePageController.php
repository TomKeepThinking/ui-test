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
        $work = [
            [
                'image' => '/storage/images/phone.png',
                'title' => 'Asia Art Archive',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.'
            ],
            [
                'image' => '/storage/images/phone-2.png',
                'title' => 'Texas General Land Office',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
            ],
            [
                'image' => '/storage/images/phone-3.png',
                'title' => 'Art UK',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art'
            ],
            [
                'image' => '/storage/images/phone-4.png',
                'title' => 'British Art Studies',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art'
            ],
            [
                'image' => '/storage/images/phone-4.png',
                'title' => 'Asia Art Archive',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.'
            ],
            [
                'image' => '/storage/images/phone-5.png',
                'title' => 'Texas General Land Office',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.'
            ]
        ];


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

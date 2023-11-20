<?php

namespace App\Http\Controllers;

class IdeasPageController extends Controller
{
    public function __invoke()
    {
        $projects = [
            [
                'image' => '/storage/images/phone.png',
                'title' => 'Asia Art Archive',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
                'tags' => ['featured','website']
            ],
            [
                'image' => '/storage/images/phone-2.png',
                'title' => 'Texas General Land Office',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
                'tags' => ['featured','website']
            ],
            [
                'image' => '/storage/images/phone-3.png',
                'title' => 'Art UK',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art',
                'tags' => ['featured','website']
            ],
            [
                'image' => '/storage/images/phone-4.png',
                'title' => 'British Art Studies 2',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art',
                'tags' => ['website']
            ],
            [
                'image' => '/storage/images/phone-4.png',
                'title' => 'Asia Art Archive',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
                'tags' => ['featured','website']
            ],
            [
                'image' => '/storage/images/phone-5.png',
                'title' => 'Texas General Land Office',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
                'tags' => ['featured','software']
            ],
            [
                'image' => '/storage/images/phone.png',
                'title' => 'Asia Art Archive',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
                'tags' => ['featured','software']
            ],
            [
                'image' => '/storage/images/phone-2.png',
                'title' => 'Texas General Land Office',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
                'tags' => ['featured','software']
            ],
            [
                'image' => '/storage/images/phone-3.png',
                'title' => 'Art UK',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art',
                'tags' => ['featured','brand']
            ],
            [
                'image' => '/storage/images/phone-4.png',
                'title' => 'British Art Studies',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art',
                'tags' => ['featured','website']
            ],
            [
                'image' => '/storage/images/phone-4.png',
                'title' => 'Asia Art Archive',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
                'tags' => ['brand','website']
            ],
            [
                'image' => '/storage/images/phone-5.png',
                'title' => 'Texas General Land Office',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
                'tags' => ['archived']
            ]
        ];
        return view('pages.ideas', compact('projects'));
    }
}

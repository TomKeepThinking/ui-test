<?php

namespace App\Http\Controllers;

class AboutPageController extends Controller
{
    public function __invoke()
    {

        $team = [
            [
                'name' => 'Cristiano Bianchi',
                'role' => 'Managing Director',
                'image' => '/images/headshot-1.png'
            ],
            [
                'name' => 'Claire Afford',
                'role' => 'Product Manager',
                'image' => '/images/headshot-2.png'
            ],
            [
                'name' => 'Tianna Laverock',
                'role' => 'Studio & Project Manager',
                'image' => '/images/headshot-3.png'
            ],
            [
                'name' => 'Sarah Hudson',
                'role' => 'Support Manager',
                'image' => '/images/headshot-4.png'
            ],
            [
                'name' => 'Alistair Cooper',
                'role' => 'Art Director',
                'image' => '/images/headshot-5.png'
            ],
            [
                'name' => 'Lelia Mak',
                'role' => 'Senior Engineer',
                'image' => '/images/headshot-6.png'
            ],
            [
                'name' => 'Michal Laczak',
                'role' => 'Senior Engineer',
                'image' => '/images/headshot-7.png'
            ],
            [
                'name' => 'Jayeon Lee',
                'role' => 'Developer',
                'image' => '/images/headshot-8.png'
            ],
            [
                'name' => 'Haisam Amin',
                'role' => 'Programmer',
                'image' => '/images/headshot-9.png'
            ],
        ];

        $work = [
            [
                'image' => '/images/related-1.png',
                'title' => 'Asia Art Archive',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.'
            ],
            [
                'image' => '/images/related-2.png',
                'title' => 'Texas General Land Office',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
            ],
            [
                'image' => '/images/related-3.png',
                'title' => 'Art UK',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art'
            ]
        ];

        return view('pages.about', compact('team', 'work'));
    }
}

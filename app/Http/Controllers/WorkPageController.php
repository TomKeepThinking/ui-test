<?php

namespace App\Http\Controllers;

class WorkPageController extends Controller
{
    public function __invoke()
    {

        $pageHeader = 'Innovative digital solutions to help preserve and shape  culture and heritage';
        $work = [
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
        $clients = collect([
            'ArtUK',
            'Ashmolean Museum',
            'Asia Art Archive',
            'Asia Society',
            'Artists Collecting Society',
            'Art & the Country House',
            'British Art Studies',
            'Charlie Chaplin Archive',
            'Coca-Cola Company',
            'Dia Art Foundation',
            'Diva Museum',
            'Fleming Collection',
            'GSK Heritage',
            'Horniman Museum',
            'Kemper Art Museum',
            'Landmark Preservation',
            'Lloyds Register',
            'Media Majlis Gallery',
            'Menier Venues',
            'Mikmawey Debert Cultural Centre',
            'Motown Museum',
            'Mucha Foundation',
            'National Galleries Singapore',
            'Obama Foundation',
            'Paul Mellon Centre',
            'Sainsbury’s Archive',
            'SFMoMA',
            'Shakespeare Birthplace Trust',
            'The Alamo',
            'TexasGLO',
            'Unilever',
            'Western Carolina University',
            'White Cube',
        ])->splitIn(3);

        return view('pages.work', compact('work', 'pageHeader', 'clients'));
    }
}

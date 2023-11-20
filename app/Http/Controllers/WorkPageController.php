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
        $clients = [
            [
                'name' =>'ArtUK',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Ashmolean Museum',
                'image' => '/image/image2.png'
            ],
            [
                'name' =>'Asia Art Archive',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Asia Society',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Artists Collecting Society',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Art & the Country House',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'British Art Studies',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Charlie Chaplin Archive',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Coca-Cola Company',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Dia Art Foundation',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Diva Museum',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Fleming Collection',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'GSK Heritage',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Horniman Museum',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Kemper Art Museum',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Landmark Preservation',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Lloyds Register',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Media Majlis Gallery',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Menier Venues',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Mikmawey Debert Cultural Centre',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Motown Museum',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Mucha Foundation',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'National Galleries Singapore',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Obama Foundation',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Paul Mellon Centre',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Sainsbury’s Archive',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'SFMoMA',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Shakespeare Birthplace Trust',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'The Alamo',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'TexasGLO',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Unilever',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'Western Carolina University',
                'image' => '/image/image.png'
            ],
            [
                'name' =>'White Cube',
                'image' => '/image/image.png'
            ],
        ];

        $clients = array_chunk($clients, 14);

        return view('pages.work', compact('work', 'pageHeader', 'clients'));
    }
}

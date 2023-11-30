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
        return view('pages.ideas.index', compact('projects'));
    }

    public function show($idea){
//        TODO: Implement work model, update argument to be 'Idea $idea'

        $work = [
            [
                'image' => '/images/test.png',
                'title' => 'Asia Art Archive',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.'
            ],
            [
                'image' => '/images/test.png',
                'title' => 'Texas General Land Office',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art.',
            ],
            [
                'image' => '/images/test.png',
                'title' => 'Art UK',
                'excerpt' => 'We helped to democratise the UK’s publicly owned art'
            ]
        ];

        $quote = [
            'quote' => '"This is definitely a smoother workflow,"',
            'author' => 'says Rebecca Weisberg, digital asset manager at SFMOMA.'
        ];

        $content = [
            [
                'header' => 'Aligning complimentary systems to increase productivity',
                'content' => [
                    'Previously, NetX has used its Data Source Sync (DSS) to pull metadata from SFMOMA’s old CMS into the relevant metadata fields in NetX. In order to achieve the integration SFMOMA was asking for, teams from Keepthinking and NetX worked together to use the Qi’s API and the NetX’s API to sync assets and data between the two systems.',
                    'In Qi, a record may have multiple digital assets associated with one set of metadata, whereas in NetX, each digital asset has its own set of metadata. The integration between the two systems allows each one of them to be the single source of truth for a specific type of metadata, while minimizing the amount of time SFMOMA’s team spends updating information and weeding through duplicate files.',
                    '“Early on in the process, we realized the two systems were very complimentary,” says Cristiano Bianchi, director of Keepthinking. “Qi is about metadata and processes, whilst NetX is about digital assets: combining their workflows was an obvious and easy thing to do.”',
                    'For SFMOMA, Qi is the source of truth for everything related to the artworks, such as title, artist, dimensions, medium, locations, valuations and credit line. NetX is the source of truth for data that is more specific to the images themselves, such as photographer, resource type, usage restrictions, and the type of image view it is (such as primary view or reference image).',
                    '“We try to make sure there’s a very clean delineation between the type of metadata that’s gathered in NetX versus in Qi,” says Weisberg.'
                ]
            ],
            [
                'header' => 'Piloting a partnership',
                'content' => [
                    'While the integration for SFMOMA was the result of both software vendors undertaking a special project, the stage is now set for NetX and Qi to work together seamlessly for other museums who want more functionality between their DAM and CMS.',
                    '“NetX and Qi were both really great partners throughout the process,” says Weisberg.',
                    'Misunas agrees. “They were both very enthusiastic when it comes to new things we want to do,” she says.',
                    'Throughout the years, NetX has used its Data Source Sync (DSS) tool to pull data from various Collections Management Systems and map it to fields in the NetX DAM. More often than not, museums make the request to have their CMS pull images from NetX to update their collections records. While possible, this has historically required museums to have a team available to integrate with NetXs API. But with Qi, pulling images and roundtrip sync of data has been made seamless through a complete integration, using the two platforms’ APIs.',
                    'To learn more, schedule a call with Keepthinking. Or get in touch with NetX for more information on its DAM.'
                ]
            ]
        ];

        return view('pages.ideas.single', compact('work', 'quote', 'content'));
    }
}

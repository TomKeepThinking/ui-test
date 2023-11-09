<?php

namespace App\Http\Controllers;

class QiPageController extends Controller
{
    public function __invoke()
    {
        $hotSpots = [
          [
              'name' => 'Dashboard',
              'image' => 'http://via.placeholder.com/800x830',
              'spots' => [
                  [
                      'id' => uniqid(),
                      'name' => 'Global search',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 10,
                      'y' => 20
                  ],
                  [
                      'id' => uniqid(),
                      'name' => 'All content at a glance',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 170,
                      'y' => 620
                  ],
                  [
                      'id' => uniqid(),
                      'name' => 'Easy access',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 10,
                      'y' => 20
                  ],
                  [
                      'id' => uniqid(),
                      'name' => 'Quick links',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 120,
                      'y' => 210
                  ],
                  [
                      'id' => uniqid(),
                      'name' => 'Resources and help',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 140,
                      'y' => 240
                  ]
              ]
          ],
            [
                'name' => 'Content Management',
                'image' => 'http://via.placeholder.com/800x830',
                'spots' => [
                    [
                        'id' => uniqid(),
                        'name' => 'Global search',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 20,
                        'y' => 30
                    ],
                    [
                        'id' => uniqid(),
                        'name' => 'All content at a glance',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 40,
                        'y' => 50
                    ],
                    [
                        'id' => uniqid(),
                        'name' => 'Easy access',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 110,
                        'y' => 30
                    ],
                    [
                        'id' => uniqid(),
                        'name' => 'Quick links',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 30,
                        'y' => 330
                    ],
                    [
                        'id' => uniqid(),
                        'name' => 'Resources and help',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 120,
                        'y' => 310
                    ]
                ]
            ]
        ];

        return view('pages.qi', compact('hotSpots'));
    }
}

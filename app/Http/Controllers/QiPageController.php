<?php

namespace App\Http\Controllers;

class QiPageController extends Controller
{
    public function __invoke()
    {
        $hotSpots = [
          [
              'name' => 'Dashboard',
              'hostSpot' => [
                  [
                      'name' => 'Global search',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 10,
                      'y' => 20
                  ],
                  [
                      'name' => 'All content at a glance',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 170,
                      'y' => 620
                  ],
                  [
                      'name' => 'Easy access',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 10,
                      'y' => 20
                  ],
                  [
                      'name' => 'Quick links',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 120,
                      'y' => 210
                  ],
                  [
                      'name' => 'Resources and help',
                      'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                      'x' => 140,
                      'y' => 240
                  ]
              ]
          ],
            [
                'name' => 'Content Management',
                'hostSpot' => [
                    [
                        'name' => 'Global search',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 20,
                        'y' => 30
                    ],
                    [
                        'name' => 'All content at a glance',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 40,
                        'y' => 50
                    ],
                    [
                        'name' => 'Easy access',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 110,
                        'y' => 30
                    ],
                    [
                        'name' => 'Quick links',
                        'content' => 'View at a glance any upcoming actions needed to help prioritise your staffs workflow.',
                        'x' => 30,
                        'y' => 330
                    ],
                    [
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

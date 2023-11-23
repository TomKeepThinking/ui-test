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
                      'y' => 920
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

        $features = [
            [
                'title' => 'Flexibility',
                'features' =>[
                    'Ability to configure cluster of nodes for multiple organisations',
                    'Ability to configure nodes, types of content and fields',
                    'Customisable search fields',
                    'Ability to adapt to any data structure and design',
                    'Complete customisation of content types and relationships',
                    'Extensible content types and nodes',
                    'Ability to re-use content and assets',
                    'Support for any character set / UTF-8',
                    'Interface localisation in any language',
                    'Metadata, classification and tagging',
                    'Support for multiple sites/repositories within the same database'
                ],
            ],
            [
                'title' => 'Performance and Scalability',
                'features' => [
                    'REST API in XML/JSON to integrate with third-parties',
                    'Native integration with Elasticsearch',
                    'Advanced multi-layered caching using Memchache',
                    'Support for shared, dedicated, cloud and multi-tier environments',
                    'Support for database replication',
                    'Support for load balancers and scale-on-demand environments',
                    'Metadata Standards Support',
                    'Mobile support',
                    'UTF-8 support',
                    'WAI Compliant',
                    'Customisable support for LIDO/Dublin Core',
                    'Support for OAI-PMH'
                ]
            ],
            [
                'title' => 'User Interface',
                'features' => [
                    'Dashboard with quick search and links',
                    'Universal full-text indexing and search, with results sorted by relevance',
                    'Quick access to frequently used content',
                    'Browse hierarchical tree of records',
                    'Flexible and customisable input screens and tabs',
                    'Flexible, customisable field types and validation rules',
                    'Support for drag-and-drop features',
                    'Support for friendly URLs',
                    'Support for comments, task assignment and notes between editors',
                    'WYSIWYG Editor, based on web standards',
                    'Drag-and-drop to upload',
                ]
            ],
            [
                'title' => 'Security',
                'features' => [
                    'SSL Support',
                    'Audit trail and versioning',
                    'Content Approval and Workflow',
                    'Granular, role-based Permissions',
                    'Statistics of login history and activity',
                    'Support for SSO and multi-factor authentication',
                ]
            ],
            [
                'title' => 'Content Management',
                'features' => [
                    'Create multilingual content & translation workflow',
                    'Shop dashboard with analytics',
                    'Shop management (Products, memberships, donations & tickets)',
                    'Content scheduling',
                    'Cascading metadata',
                    'Configuration editor',
                    'Relationship management',
                    'Content packages',
                    'Multiple repositories and support for multiple languages within the same repository',
                    'Reporting in Word, Excel and PDF',
                    'Web-based administration',
                    'User and Group permission manager',
                    'per cluster',
                    'User and Group permission manager per content type',
                    'User and Group permission manager per individual field',
                ]
            ],
            [
                'title' => 'User Interface',
                'features' => [
                    'Advanced features',
                    'Spectrum 5 compliant',
                    'Fully de-normalised content available for export',
                    'Boolean searches',
                    'Configurable high-priority search fields and criteria and scoring for search by relevance',
                    'Integrated LOD authorities, including AAT, Geonames, VIAF, Wikidata, Library of Congress and anyone else with an API',
                    'Create library records from ISBN',
                    'Configurable approval workflows',
                    'Mobile movements control with companion iOS App',
                ]
            ],
            [
                'title' => 'Asset Management',
                'features' => [
                    'Create media catalogues',
                    'Team permissions for reading and writing catalogues',
                    'Upload multiple files',
                    'Associate images with files',
                    'Associate images and documents with audio and video',
                    'Display meta-file information',
                    'Zoom images',
                    'Preview audio and video',
                    'Complete document and asset management (Images, Documents, Video and Audio)',
                    'Automatic resizing of images and thumbnail generator',
                    'Upload Word, Excel, PDF and more than 400 file types',
                ]
            ],
            [
                'title' => 'Content Management',
                'features' => [
                    'Web publishing',
                    'Integrated web publishing module',
                    'Availability of REST API and Elasticsearch for integration with other CMSes',
                    'Direct publishing from the CMS, without exporting to other systems',
                    'Keepthinking (creators of Qi) can design an award-winning website for you',
                ]
            ]

        ];

        $technology = [
            [
                'title' => 'Web browser support',
                'features' => [
                    'Microsoft Edge (latest 3 versions)',
                    'Google Chrome (latest 3 versions)',
                    'Firefox (latest 3 versions)',
                    'Safari (latest 3 versions)',
                    'Mobile Safari (latest 3 versions)',
                    'Mobile Opera (latest 3 versions)',
                ]
            ],
            [
                'title' => 'Interface languages',
                'features' => [
                    'English',
                    'German',
                    'Dutch',
                    'Swedish',
                    'Norwegean',
                    'Finnish',
                    'Any other language on request',
                ]
            ],
            [
                'title' => 'Programming languages',
                'features' => [
                    'Back end: PHP 7.4, based on the CodeIgniter 3.1 MVC framework',
                    'Front end: HTML5 with CSS3'
                ]
            ],
            [
                'title' => 'Database server',
                'features' => [
                    'MySQL version 5.7 or greater'
                ]
            ],
            [
                'title' => 'Accessibility',
                'features' => [
                    'Compliant with WAI Level AA guidelines'
                ]
            ],
            [
                'title' => 'Web Server',
                'features' => [
                    'Apache 2 (Recommended)'
                ]
            ]
        ];

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

        return view('pages.qi',
            compact(
                'hotSpots',
                'features',
                'technology',
                'work'
            ));
    }
}

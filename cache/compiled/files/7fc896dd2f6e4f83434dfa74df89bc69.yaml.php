<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav-skeleton-photographer-site/user/themes/gravi-k/blueprints.yaml',
    'modified' => 1474470901,
    'data' => [
        'name' => 'Gravi-k',
        'version' => '0.0.1',
        'description' => 'Multipurpose site',
        'icon' => 'wrench',
        'author' => [
            'name' => 'Eric De Lanoy',
            'email' => 'e.delanoy@adweb-services',
            'url' => 'www.adweb-services.com'
        ],
        'homepage' => NULL,
        'demo' => 'http://www.demo.adweb-services.com/gravi-k/',
        'keywords' => 'Gravi-K, theme, customization, modern, fast, responsive, html5, css3, framework Knacss,',
        'bugs' => NULL,
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'general' => [
                    'type' => 'section',
                    'title' => 'General settings',
                    'underline' => true,
                    'fields' => [
                        'dropdown.enabled' => [
                            'type' => 'toggle',
                            'label' => 'Dropdown in navbar',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'display0' => [
                            'type' => 'display',
                            'label' => 'Note for setting language',
                            'markdown' => true,
                            'content' => 'For multi-language see https://learn.getgrav.org/content/multi-language#multi-language-basics'
                        ],
                        'default_lang' => [
                            'type' => 'text',
                            'label' => 'ISO Language Code for your site',
                            'size' => 'x-small',
                            'help' => 'See http://www.w3schools.com/tags/ref_language_codes.asp'
                        ]
                    ]
                ],
                'head' => [
                    'type' => 'section',
                    'title' => 'Navbar settings',
                    'underline' => true,
                    'fields' => [
                        'display1' => [
                            'type' => 'display',
                            'size' => 'large',
                            'label' => 'Info',
                            'markdown' => true,
                            'content' => 'Put the logo image in the "images folder" and specify below the name with the extension .jpg or .png'
                        ],
                        'logo' => [
                            'type' => 'text',
                            'label' => 'logo image (with extension .jpg, .png ...)',
                            'help' => 'image size, max-height: 64px.'
                        ]
                    ]
                ],
                'company' => [
                    'type' => 'section',
                    'title' => 'Contact details',
                    'underline' => true,
                    'fields' => [
                        'columns1' => [
                            'type' => 'columns',
                            'fields' => [
                                'column11' => [
                                    'type' => 'column',
                                    'fields' => [
                                        'contact.name' => [
                                            'type' => 'text',
                                            'label' => 'Contact name'
                                        ],
                                        'contact.adr' => [
                                            'type' => 'textarea',
                                            'label' => 'Address'
                                        ],
                                        'contact.zip' => [
                                            'type' => 'text',
                                            'label' => 'Zip code',
                                            'size' => 'small'
                                        ],
                                        'contact.city' => [
                                            'type' => 'text',
                                            'label' => 'City',
                                            'size' => 'medium'
                                        ],
                                        'contact.state' => [
                                            'type' => 'text',
                                            'label' => 'State',
                                            'size' => 'medium'
                                        ],
                                        'contact.country' => [
                                            'type' => 'text',
                                            'label' => 'Country',
                                            'size' => 'medium'
                                        ]
                                    ]
                                ],
                                'column12' => [
                                    'type' => 'column',
                                    'fields' => [
                                        'contact.email' => [
                                            'type' => 'text',
                                            'label' => 'Email',
                                            'size' => 'medium'
                                        ],
                                        'contact.phone' => [
                                            'type' => 'text',
                                            'label' => 'Phone',
                                            'size' => 'medium'
                                        ],
                                        'contact.mob_phone' => [
                                            'type' => 'text',
                                            'label' => 'Mobile phone',
                                            'size' => 'medium'
                                        ],
                                        'contact.fax' => [
                                            'type' => 'text',
                                            'label' => 'Fax',
                                            'size' => 'medium'
                                        ],
                                        'contact.gmap.lat' => [
                                            'type' => 'text',
                                            'label' => 'Latitude',
                                            'size' => 'medium',
                                            'help' => 'decimal degrees (e.g: 40.7127837)'
                                        ],
                                        'contact.gmap.lng' => [
                                            'type' => 'text',
                                            'label' => 'Longitude',
                                            'size' => 'medium',
                                            'help' => 'decimal degrees (e.g: -74.00594130000002)'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'social' => [
                    'type' => 'section',
                    'title' => 'Social settings',
                    'underline' => true,
                    'text' => 'Select your social links',
                    'fields' => [
                        'social.content' => [
                            'type' => 'textarea',
                            'label' => 'Some text content (Markdown possible)',
                            'placeholder' => 'Follow us...'
                        ],
                        'social.links' => [
                            'type' => 'list',
                            'label' => 'Social links',
                            'fields' => [
                                '.name' => [
                                    'type' => 'select',
                                    'label' => 'Select a name',
                                    'options' => [
                                        'facebook' => 'Facebook',
                                        'google-plus' => 'Google+',
                                        'twitter' => 'Twitter',
                                        'skype' => 'Skype',
                                        'envelope' => 'Email',
                                        'linkedin' => 'LinkedIn',
                                        'slideshare' => 'Slideshare',
                                        'youtube' => 'Youtube',
                                        'vimeo' => 'Vimeo',
                                        'instagram' => 'Instagram',
                                        'flickr' => 'Flickr',
                                        'pinterest' => 'Pinterest',
                                        'tumblr' => 'Tumblr'
                                    ]
                                ],
                                '.url' => [
                                    'type' => 'text',
                                    'label' => 'URL',
                                    'placeholder' => 'http:// or email'
                                ]
                            ]
                        ]
                    ]
                ],
                'section' => [
                    'type' => 'section',
                    'title' => 'Footer settings',
                    'text' => 'The footer contains at least 3 sections -- About -- Company details -- Social links --   You can add 1 more if you want.',
                    'underline' => true,
                    'fields' => [
                        'spacer1' => [
                            'type' => 'spacer',
                            'title' => 'Section About'
                        ],
                        'display.about' => [
                            'type' => 'toggle',
                            'label' => 'Display about',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'about.title' => [
                            'type' => 'text',
                            'label' => 'Title (default: About)'
                        ],
                        'about.img' => [
                            'type' => 'text',
                            'label' => 'Image name (with extension .jpg, .png ...)',
                            'help' => 'If different from logo image'
                        ],
                        'about.content' => [
                            'type' => 'textarea',
                            'label' => 'Some text content',
                            'help' => 'Markdown language possible',
                            'placeholder' => 'e.g: For more then ... years, ...'
                        ],
                        'spacer2' => [
                            'type' => 'spacer',
                            'title' => 'Section Company details'
                        ],
                        'display.contact' => [
                            'type' => 'toggle',
                            'label' => 'Display Contact details',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'contact.title_footer' => [
                            'type' => 'text',
                            'label' => 'Title (default: Company details)'
                        ],
                        'spacer3' => [
                            'type' => 'spacer',
                            'title' => 'Section Working hours'
                        ],
                        'display.openday' => [
                            'type' => 'toggle',
                            'label' => 'Display workinghours',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'openday.title' => [
                            'type' => 'text',
                            'label' => 'Title (default: Working hours)'
                        ],
                        'openday.some_text' => [
                            'type' => 'textarea',
                            'label' => 'Some text before the workinghours (optional)',
                            'help' => 'Markdown language possible',
                            'placeholder' => 'We work 7 days a week, .... Contact us for any info.'
                        ],
                        'openday.resume' => [
                            'type' => 'array',
                            'label' => 'Working hours settings',
                            'help' => NULL,
                            'placeholder_key' => 'e.g: monday',
                            'placeholder_value' => '07:00-13:00 14:00-19:00'
                        ],
                        'spacer4' => [
                            'type' => 'spacer',
                            'title' => 'Section Social link'
                        ],
                        'social.display' => [
                            'type' => 'toggle',
                            'label' => 'Display Social links',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'social.title' => [
                            'type' => 'text',
                            'label' => 'Title (default: Social links)'
                        ],
                        'spacer5' => [
                            'type' => 'spacer',
                            'title' => 'Section pages links informations'
                        ],
                        'infos.display' => [
                            'type' => 'toggle',
                            'label' => 'Display page links information',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'infos.title' => [
                            'type' => 'text',
                            'label' => 'Title (default: Information)'
                        ],
                        'infos.page_dest' => [
                            'type' => 'list',
                            'label' => 'Select your pages',
                            'fields' => [
                                '.url' => [
                                    'type' => 'pages',
                                    'label' => 'page links'
                                ],
                                '.name' => [
                                    'type' => 'text',
                                    'label' => 'title page (optional)',
                                    'help' => 'If field empty then default name used'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

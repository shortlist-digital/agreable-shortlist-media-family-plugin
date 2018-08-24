<?php

$key = 'people_grid';
$widgetplacement = self::$config['tab_placement'];

$widget_config = [
            'key' => $key,
            'name' => 'people-grid',
            'label' => 'People Grid',
            'display' => 'block',
            'sub_fields' => [
                [
                    'key' => $key.'_basic_details_tab',
                    'label' => 'Basic Details',
                    'type' => 'tab',
                    'placement' => $widgetplacement,
                ],
                [
                    'key' => $key.'_repeater',
                    'label' => 'People Grid',
                    'name' => 'people_grid',
                    'type' => 'repeater',
                    'min' => '1',
                    'layout' => 'block',
                    'button_label' => 'Add a person',
                    'sub_fields' => [
                        [
                            'key' => $key.'_image',
                            'label' => 'Image',
                            'name' => 'image',
                            'type' => 'image',
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'wrapper' => [
                                'width' => '50%',
                            ]
                        ],
                        [
                            'key' => $key.'alternative_image',
                            'label' => 'Alternative Image',
                            'name' => 'alternative_image',
                            'type' => 'image',
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'wrapper' => [
                                'width' => '50%',
                            ]
                        ],
                        [
                            'key' => $key.'_name',
                            'label' => 'Name',
                            'name' => 'name',
                            'type' => 'text',
                            'simplify' => 1,
                            'no_return' => 0,
                            'disable_toolbar' => 0
                        ],
                        [
                            'key' => $key.'_job_title',
                            'label' => 'Job Title',
                            'name' => 'job_title',
                            'type' => 'text',
                            'simplify' => 1,
                            'no_return' => 0,
                            'disable_toolbar' => 0
                        ],
                        [
                            'key' => $key.'_email',
                            'label' => 'Email',
                            'name' => 'email',
                            'type' => 'email'
                        ],
                        [
                            'key' => $key.'_telephone',
                            'label' => 'Telephone',
                            'name' => 'telephone',
                            'type' => 'number'
                        ],
                        [
                            'key' => $key.'_description',
                            'label' => 'Description',
                            'name' => 'description',
                            'type' => 'strict_wysiwyg'
                        ]
                    ]
                ],
                [
                    'key' => $key.'_advanced_details_tab',
                    'label' => 'Advanced Details',
                    'type' => 'tab',
                    'placement' => $widgetplacement,
                ]
            ]
];
$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");

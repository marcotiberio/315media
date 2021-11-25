<?php

namespace Flynt\Components\ListColumn;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'ListColumn',
        'label' => 'List: Column',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Column', 'flynt'),
                'name' => 'column',
                'type' => 'repeater',
                'layout' => 'table',
                'min' => 1,
                'button_label' => __('Add List', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('List', 'flynt'),
                        'name' => 'list',
                        'type' => 'wysiwyg',
                        'delay' => 1,
                        'media_upload' => 0,
                        'required' => 0,
                    ],
                ],
            ]
        ],
    ];
}

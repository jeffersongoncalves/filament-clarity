<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => 'Settings',
    'title' => 'Microsoft Clarity Settings',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => 'Configure the Microsoft Clarity tracking code for your site.',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => 'Project ID',
            'helper' => 'Your Clarity project ID (e.g. abcd1234ef). Find it in Clarity under Settings > Setup. Leave empty to disable tracking.',
        ],
    ],
];

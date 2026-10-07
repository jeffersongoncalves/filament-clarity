<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Microsoft Clarity',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => 'Настройте код отслеживания Microsoft Clarity для вашего сайта.',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => 'ID проекта',
            'helper' => 'ID вашего проекта в Clarity (например, abcd1234ef). Его можно найти в Clarity в разделе Settings > Setup. Оставьте пустым, чтобы отключить отслеживание.',
        ],
    ],
];

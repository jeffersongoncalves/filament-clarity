<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => '设置',
    'title' => 'Microsoft Clarity 设置',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => '为你的网站配置 Microsoft Clarity 跟踪代码。',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => '项目 ID',
            'helper' => '你的 Clarity 项目 ID（例如 abcd1234ef）。可在 Clarity 的 Settings > Setup 中找到。留空则停用跟踪。',
        ],
    ],
];

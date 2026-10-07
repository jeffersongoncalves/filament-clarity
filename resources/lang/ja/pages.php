<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => '設定',
    'title' => 'Microsoft Clarity 設定',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => 'サイトの Microsoft Clarity トラッキングコードを設定します。',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => 'プロジェクト ID',
            'helper' => 'Clarity のプロジェクト ID（例：abcd1234ef）。Clarity の Settings > Setup で確認できます。トラッキングを無効にするには空のままにします。',
        ],
    ],
];

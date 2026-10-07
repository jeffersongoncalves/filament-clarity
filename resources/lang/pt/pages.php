<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Microsoft Clarity',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => 'Configure o código de rastreamento do Microsoft Clarity do seu site.',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => 'ID do projeto',
            'helper' => 'O ID do seu projeto no Clarity (ex.: abcd1234ef). Encontre-o no Clarity em Settings > Setup. Deixe vazio para desativar o rastreio.',
        ],
    ],
];

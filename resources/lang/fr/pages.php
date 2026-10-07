<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Microsoft Clarity',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => 'Configurez le code de suivi Microsoft Clarity de votre site.',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => 'ID du projet',
            'helper' => 'L\'ID de votre projet Clarity (ex. : abcd1234ef). Vous le trouverez dans Clarity sous Settings > Setup. Laissez vide pour désactiver le suivi.',
        ],
    ],
];

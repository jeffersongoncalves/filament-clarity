<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Microsoft Clarity',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => 'Configura il codice di tracciamento Microsoft Clarity del tuo sito.',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => 'ID progetto',
            'helper' => 'L\'ID del tuo progetto Clarity (es. abcd1234ef). Lo trovi in Clarity in Settings > Setup. Lascia vuoto per disattivare il tracciamento.',
        ],
    ],
];

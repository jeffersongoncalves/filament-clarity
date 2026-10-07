<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Microsoft Clarity',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => 'Configura el código de seguimiento de Microsoft Clarity de tu sitio.',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => 'ID del proyecto',
            'helper' => 'El ID de tu proyecto en Clarity (p. ej., abcd1234ef). Encuéntralo en Clarity en Settings > Setup. Déjalo vacío para desactivar el seguimiento.',
        ],
    ],
];

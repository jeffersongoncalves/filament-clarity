<?php

return [
    'navigation_label' => 'Microsoft Clarity',
    'navigation_group' => 'Einstellungen',
    'title' => 'Microsoft Clarity-Einstellungen',
    'sections' => [
        'clarity' => [
            'heading' => 'Microsoft Clarity',
            'description' => 'Konfigurieren Sie den Microsoft Clarity-Tracking-Code für Ihre Website.',
        ],
    ],
    'fields' => [
        'project_id' => [
            'label' => 'Projekt-ID',
            'helper' => 'Ihre Clarity-Projekt-ID (z. B. abcd1234ef). Zu finden in Clarity unter Settings > Setup. Leer lassen, um das Tracking zu deaktivieren.',
        ],
    ],
];

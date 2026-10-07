<?php

namespace JeffersonGoncalves\Filament\Clarity;

use JeffersonGoncalves\Filament\Clarity\Pages\ManageClaritySettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class ClarityPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-clarity';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageClaritySettings::class;
    }
}

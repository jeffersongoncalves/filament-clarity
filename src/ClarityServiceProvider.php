<?php

namespace JeffersonGoncalves\Filament\Clarity;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class ClarityServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-clarity';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::HEAD_START => 'clarity::script',
        ];
    }
}

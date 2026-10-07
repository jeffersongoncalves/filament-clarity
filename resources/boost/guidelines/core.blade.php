## Filament Clarity

Filament plugin for Microsoft Clarity with a settings page powered by Spatie Laravel Settings. Manage the Clarity project ID from the Filament admin panel; the tracking code is injected into `<head>` of every panel page.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-clarity:"^3.0"
php artisan vendor:publish --tag=clarity-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Clarity\ClarityPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            ClarityPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Disable the settings page" lang="php">
ClarityPlugin::make()->settingsPage(false)
</code-snippet>
@endverbatim

### Architecture
- `ClarityPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageClaritySettings`
- `ClarityServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `clarity::script` view (from `jeffersongoncalves/laravel-clarity`) at `PanelsRenderHook::HEAD_START`
- `ManageClaritySettings` extends `Filament\Pages\SettingsPage` bound to `JeffersonGoncalves\Clarity\Settings\ClaritySettings` (`project_id`)
- Translations live under `filament-clarity::pages.*`

### Best Practices
- Publish and run the settings migrations before opening the settings page
- The script only renders when `project_id` is set (alphanumeric), so leaving it empty disables tracking

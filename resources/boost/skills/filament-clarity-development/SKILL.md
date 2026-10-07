---
name: filament-clarity-development
description: Build and work with the Filament Clarity plugin — Clarity settings page, head script injection and project ID management in Filament panels.
---

# Filament Clarity Development

## When to use this skill

Use this skill when:
- Adding or changing the Clarity integration of a Filament panel
- Customizing the Clarity settings page
- Debugging missing Clarity tracking code in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-clarity` (branch `2.x` for Filament 4.x)
- **Namespace**: `JeffersonGoncalves\Filament\Clarity`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^2.0`, `jeffersongoncalves/laravel-clarity:^1.0`
- **Service Provider**: `JeffersonGoncalves\Filament\Clarity\ClarityServiceProvider`

## Version Compatibility

| Branch | Filament | PHP |
|--------|----------|-----|
| 1.x | 3.x | ^8.2 |
| 2.x | 4.x | ^8.2 |
| 3.x | 5.x | ^8.2 |

## Setup

```php
use JeffersonGoncalves\Filament\Clarity\ClarityPlugin;

$panel->plugins([
    ClarityPlugin::make(),                        // settings page + script injection
    // ClarityPlugin::make()->settingsPage(false), // script injection only
]);
```

```bash
php artisan vendor:publish --tag=clarity-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Type | Description |
|-------|------|-------------|
| `project_id` | TextInput (alphanumeric) | Clarity project ID (Settings > Setup); empty disables tracking |

## Troubleshooting

- **Script missing**: check `project_id` is saved and `ClarityServiceProvider` is discovered; the `clarity::script` view comes from `laravel-clarity`.
- **Settings page errors**: the `clarity` settings group is missing — publish and run the migrations.

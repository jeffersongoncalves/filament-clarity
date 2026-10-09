# Changelog

All notable changes to this project will be documented in this file.

## 1.1.0 - 2026-10-09

`Plugin::make()->navigationGroup(string|Closure)` puts the settings page in one of your panel's own navigation groups (requires filament-analytics-core 1.1). Without it the translated group is kept.

## 1.0.0 - 2026-10-07

First release for Filament 3.x.

Microsoft Clarity for Filament on top of [laravel-clarity](https://github.com/jeffersongoncalves/laravel-clarity):

- Clarity tag injected at `PanelsRenderHook::HEAD_START` once a project ID is saved
- Settings page to manage the project ID (alphanumeric validation)
- `->settingsPage(false)` for injection only
- Translations in 18 languages

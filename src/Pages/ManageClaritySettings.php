<?php

namespace JeffersonGoncalves\Filament\Clarity\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Clarity\Settings\ClaritySettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class ManageClaritySettings extends SettingsPage
{
    protected static string $settings = ClaritySettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-eye';

    public static function getNavigationLabel(): string
    {
        return __('filament-clarity::pages.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return AbstractAnalyticsPlugin::navigationGroupFor('filament-clarity') ?? __('filament-clarity::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-clarity::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-clarity::pages.sections.clarity.heading'))
                    ->description(__('filament-clarity::pages.sections.clarity.description'))
                    ->schema([
                        TextInput::make('project_id')
                            ->label(__('filament-clarity::pages.fields.project_id.label'))
                            ->helperText(__('filament-clarity::pages.fields.project_id.helper'))
                            ->placeholder('abcd1234ef')
                            ->regex('/^[a-z0-9]+$/i')
                            ->maxLength(32)
                            ->nullable(),
                    ]),
            ]);
    }
}

<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Clarity\Settings\ClaritySettings;
use JeffersonGoncalves\Filament\Clarity\ClarityPlugin;
use JeffersonGoncalves\Filament\Clarity\Pages\ManageClaritySettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageClaritySettings::class)
        ->and(ClarityPlugin::make()->getId())->toBe('filament-clarity');
});

it('uses translated labels', function () {
    expect(ManageClaritySettings::getNavigationLabel())->toBe('Microsoft Clarity');

    app()->setLocale('pt_BR');

    expect((new ManageClaritySettings)->getTitle())->toBe('Configurações do Microsoft Clarity');
});

it('saves the project id from the page', function () {
    Livewire::test(ManageClaritySettings::class)
        ->fillForm(['project_id' => 'abcd1234ef'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect(app(ClaritySettings::class)->refresh()->project_id)->toBe('abcd1234ef');
});

it('rejects a project id that is not alphanumeric', function () {
    Livewire::test(ManageClaritySettings::class)
        ->fillForm(['project_id' => 'abc"); alert(1)'])
        ->call('save')
        ->assertHasFormErrors(['project_id']);
});

it('injects the Clarity tag into the panel head once a project id is set', function () {
    $settings = app(ClaritySettings::class);
    $settings->project_id = 'abcd1234ef';
    $settings->save();

    expect((string) FilamentView::renderHook(PanelsRenderHook::HEAD_START))->toContain('https://www.clarity.ms/tag/');
});

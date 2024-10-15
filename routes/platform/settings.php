<?php

use App\Orchid\Screens\Settings\SettingsApiKeyScreen;
use App\Orchid\Screens\Settings\SettingsBotScreen;
use App\Orchid\Screens\Settings\SettingsContractScreen;
use App\Orchid\Screens\Settings\SettingsEventScreen;
use App\Orchid\Screens\Settings\SettingsSiteScreen;
use App\Orchid\Screens\Settings\SettingsStatisticsScreen;
use App\Orchid\Screens\Settings\SettingsTradeScreen;
use App\Orchid\Screens\Settings\SettingsUpgradeScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

Route::screen('settings/api-key', SettingsApiKeyScreen::class)
    ->name('platform.settings.api-key')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Настройки апи ключей'), route('platform.settings.api-key'));
    });

Route::screen('settings/bot', SettingsBotScreen::class)
    ->name('platform.settings.bot')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Настройки ботов'), route('platform.settings.bot'));
    });

Route::screen('settings/contract', SettingsContractScreen::class)
    ->name('platform.settings.contract')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Настройки контрактов'), route('platform.settings.contract'));
    });

Route::screen('settings/site', SettingsSiteScreen::class)
    ->name('platform.settings.site')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Настройки сайта'), route('platform.settings.site'));
    });

Route::screen('settings/statistics', SettingsStatisticsScreen::class)
    ->name('platform.settings.statistics')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Настройки статистики'), route('platform.settings.statistics'));
    });

Route::screen('settings/upgrade', SettingsUpgradeScreen::class)
    ->name('platform.settings.upgrade')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Настройки апгрейдов'), route('platform.settings.upgrade'));
    });

Route::screen('settings/trade', SettingsTradeScreen::class)
    ->name('platform.settings.trade')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Настройки трейдов'), route('platform.settings.trade'));
    });

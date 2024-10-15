<?php
use App\Orchid\Screens\ExchangeRate\ExchangeRateEditScreen;
use App\Orchid\Screens\ExchangeRate\ExchangeRateListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;


// Platform > ExchangeRate > List
Route::screen('exchange-rates', ExchangeRateListScreen::class)
    ->name('platform.exchange-rate.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Список валют'), route('platform.exchange-rate.list'));
    });

// Platform > ExchangeRate > Edit
Route::screen('exchange-rate/{exchange_rate}/edit', ExchangeRateEditScreen::class)
    ->name('platform.exchange-rate.edit')
    ->breadcrumbs(function (Trail $trail, $exchange_rate) {
        return $trail
            ->parent('platform.exchange-rate.list')
            ->push(__('Edit'), route('platform.exchange-rate.edit', $exchange_rate));
    });
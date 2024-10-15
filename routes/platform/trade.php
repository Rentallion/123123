<?php
use App\Orchid\Screens\Trade\TradeListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

Route::screen('trades', TradeListScreen::class)
    ->name('platform.trade.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Trades'), route('platform.trade.list'));
    });
<?php

use App\Orchid\Screens\Player\PlayerEditScreen;
use App\Orchid\Screens\Player\PlayerListScreen;
use App\Orchid\Screens\Player\PlayerReferralsScreen;
use App\Orchid\Screens\Player\PlayerInfoScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > Player > List
Route::screen('players', PlayerListScreen::class)
    ->name('platform.player.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Игроки'), route('platform.player.list'));
    });

// Platform > Player > Edit
Route::screen('player/{player}/edit', PlayerEditScreen::class)
    ->name('platform.player.edit')
    ->breadcrumbs(function (Trail $trail, $player) {
        return $trail
            ->parent('platform.player.list')
            ->push(__('Edit'), route('platform.player.edit', $player));
    });

// Platform > Player > Referrals
Route::screen('player/{player}/referrals', PlayerReferralsScreen::class)
    ->name('platform.player.referrals')
    ->breadcrumbs(function (Trail $trail, $player) {
        return $trail
            ->parent('platform.player.list')
            ->push(__('Рефералы'), route('platform.player.referrals', $player));
    });

// Platform > Player > Edit
Route::screen('player/{player}/info', PlayerInfoScreen::class)
    ->name('platform.player.info')
    ->breadcrumbs(function (Trail $trail, $player) {
        return $trail
            ->parent('platform.player.list')
            ->push(__('Info'), route('platform.player.info', $player));
    });

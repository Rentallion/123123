<?php
use App\Orchid\Screens\BoxMoney\BoxMoneyEditScreen;
use App\Orchid\Screens\BoxMoney\BoxMoneyListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > BoxMoney > List
Route::screen('boxes-money', BoxMoneyListScreen::class)
    ->name('platform.box-money.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Категории'), route('platform.box-money.list'));
    });

// Platform > BoxMoney > Edit
Route::screen('box-money/{box_money}/edit', BoxMoneyEditScreen::class)
    ->name('platform.box-money.edit')
    ->breadcrumbs(function (Trail $trail, $box_money) {
        return $trail
            ->parent('platform.box-money.list')
            ->push(__('Edit'), route('platform.box-money.edit', $box_money));
    });

// Platform > BoxMoney > Create
Route::screen('box-money/create', BoxMoneyEditScreen::class)
    ->name('platform.box-money.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.box-money.list')
            ->push(__('Create'), route('platform.box-money.create'));
    });
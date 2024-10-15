<?php
use App\Orchid\Screens\BoxMoneyCategory\BoxMoneyCategoryEditScreen;
use App\Orchid\Screens\BoxMoneyCategory\BoxMoneyCategoryListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > BoxMoneyCategory > List
Route::screen('box-money-categories', BoxMoneyCategoryListScreen::class)
    ->name('platform.box-money-category.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Категории'), route('platform.box-money-category.list'));
    });

// Platform > BoxMoneyCategory > Edit
Route::screen('box-money-category/{box_money_category}/edit', BoxMoneyCategoryEditScreen::class)
    ->name('platform.box-money-category.edit')
    ->breadcrumbs(function (Trail $trail, $box_money_category) {
        return $trail
            ->parent('platform.box-money-category.list')
            ->push(__('Edit'), route('platform.box-money-category.edit', $box_money_category));
    });

// Platform > BoxMoneyCategory > Create
Route::screen('box-money-category/create', BoxMoneyCategoryEditScreen::class)
    ->name('platform.box-money-category.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.box-money-category.list')
            ->push(__('Create'), route('platform.box-money-category.create'));
    });
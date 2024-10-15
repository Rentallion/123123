<?php
use App\Orchid\Screens\BoxLimit\BoxLimitEditScreen;
use App\Orchid\Screens\BoxLimit\BoxLimitListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > BoxLimit > List
Route::screen('boxes-limit', BoxLimitListScreen::class)
    ->name('platform.box-limit.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Категории'), route('platform.box-limit.list'));
    });

// Platform > BoxLimit > Edit
Route::screen('box-limit/{box_limit}/edit', BoxLimitEditScreen::class)
    ->name('platform.box-limit.edit')
    ->breadcrumbs(function (Trail $trail, $box_limit) {
        return $trail
            ->parent('platform.box-limit.list')
            ->push(__('Edit'), route('platform.box-limit.edit', $box_limit));
    });

// Platform > BoxLimit > Create
Route::screen('box-limit/create', BoxLimitEditScreen::class)
    ->name('platform.box-limit.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.box-limit.list')
            ->push(__('Create'), route('platform.box-limit.create'));
    });
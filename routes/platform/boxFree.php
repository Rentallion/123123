<?php
use App\Orchid\Screens\BoxFree\BoxFreeEditScreen;
use App\Orchid\Screens\BoxFree\BoxFreeListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > BoxFree > List
Route::screen('boxes-free', BoxFreeListScreen::class)
    ->name('platform.box-free.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Кейсы бесплатные'), route('platform.box-free.list'));
    });

// Platform > BoxFree > Edit
Route::screen('box-free/{box_free}/edit', BoxFreeEditScreen::class)
    ->name('platform.box-free.edit')
    ->breadcrumbs(function (Trail $trail, $box_free) {
        return $trail
            ->parent('platform.box-free.list')
            ->push(__('Edit'), route('platform.box-free.edit', $box_free));
    });

// Platform > BoxFree > Create
Route::screen('box-free/create', BoxFreeEditScreen::class)
    ->name('platform.box-free.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.box-free.list')
            ->push(__('Create'), route('platform.box-free.create'));
    });
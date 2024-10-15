<?php

use App\Orchid\Controllers\GiftCardController;
use App\Orchid\Screens\GiftCard\GiftCardCodeListScreen;
use App\Orchid\Screens\GiftCard\GiftCardPackListScreen;
use App\Orchid\Screens\GiftCard\GiftCardEditScreen;
use App\Orchid\Screens\GiftCard\GiftCardListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > Gift card > List
Route::screen('gift-cards', GiftCardListScreen::class)
    ->name('platform.gift-card.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Gift cards'), route('platform.gift-card.list'));
    });

// Platform > Gift card > Edit
Route::screen('gift-card/{gift_card}/edit', GiftCardEditScreen::class)
    ->name('platform.gift-card.edit')
    ->breadcrumbs(function (Trail $trail, $gift_card) {
        return $trail
            ->parent('platform.gift-card.list')
            ->push(__('Edit'), route('platform.gift-card.edit', $gift_card));
    });

// Platform > Gift card > Create
Route::screen('gift-card/create', GiftCardEditScreen::class)
    ->name('platform.gift-card.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.gift-card.list')
            ->push(__('Create'), route('platform.gift-card.create'));
    });

// Platform > Gift card > Pack > List
Route::screen('gift-card/{gift_card}/packs', GiftCardPackListScreen::class)
    ->name('platform.gift-card.pack.list')
    ->breadcrumbs(function (Trail $trail, $gift_card) {
        return $trail
            ->parent('platform.gift-card.list')
            ->push(__('Packs'), route('platform.gift-card.pack.list', $gift_card));
    });

// Platform > Gift card > Code > List
Route::screen('gift-card/{gift_card_pack}/codes', GiftCardCodeListScreen::class)
    ->name('platform.gift-card.code.list')
    ->breadcrumbs(function (Trail $trail, $gift_card_pack) {
        return $trail
            ->parent('platform.gift-card.list')
            ->push(__('Codes'), route('platform.gift-card.code.list', $gift_card_pack));
    });

Route::get('/file/download/gift-card-codes', [GiftCardController::class, 'downloadCodes'])
    ->name('platform.gift-card.code.download');

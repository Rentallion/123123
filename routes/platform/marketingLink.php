<?php
use App\Orchid\Screens\MarketingLink\MarketingLinkEditScreen;
use App\Orchid\Screens\MarketingLink\MarketingLinkListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > MarketingLink > List
Route::screen('marketing-links', MarketingLinkListScreen::class)
    ->name('platform.marketing-link.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Маркетинговые ссылки'), route('platform.marketing-link.list'));
    });

// Platform > MarketingLink > Edit
Route::screen('marketing-link/{marketing_link}/edit', MarketingLinkEditScreen::class)
    ->name('platform.marketing-link.edit')
    ->breadcrumbs(function (Trail $trail, $payment_promocode) {
        return $trail
            ->parent('platform.marketing-link.list')
            ->push(__('Edit'), route('platform.marketing-link.edit', $payment_promocode));
    });

// Platform > MarketingLink > Create
Route::screen('marketing-link/create', MarketingLinkEditScreen::class)
    ->name('platform.marketing-link.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.marketing-link.list')
            ->push(__('Create'), route('platform.marketing-link.create'));
    });
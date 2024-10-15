<?php

use App\Orchid\Screens\PaymentSystem\PaymentSystemDirectionEditScreen;
use App\Orchid\Screens\PaymentSystem\PaymentSystemDirectionListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > PaymentSystemDirection > List
Route::screen('payment-system-directions', PaymentSystemDirectionListScreen::class)
    ->name('platform.payment-system-direction.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Список'), route('platform.payment-system-direction.list'));
    });

// Platform > PaymentSystemDirection > Edit
Route::screen('payment-system-direction/{payment_system_direction}/edit', PaymentSystemDirectionEditScreen::class)
    ->name('platform.payment-system-direction.edit')
    ->breadcrumbs(function (Trail $trail, $payment_system_direction) {
        return $trail
            ->parent('platform.payment-system-direction.list')
            ->push(__('Edit'), route('platform.payment-system-direction.edit', $payment_system_direction));
    });

// Platform > PaymentSystemDirection > Create
Route::screen('payment-system-direction/create', PaymentSystemDirectionEditScreen::class)
    ->name('platform.payment-system-direction.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.payment-system-direction.list')
            ->push(__('Create'), route('platform.payment-system-direction.create'));
    });
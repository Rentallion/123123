<?php

use App\Orchid\Screens\PaymentSystem\PaymentSystemEditScreen;
use App\Orchid\Screens\PaymentSystem\PaymentSystemListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > PaymentSystem > List
Route::screen('payment-systems', PaymentSystemListScreen::class)
    ->name('platform.payment.system.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Payment systems'), route('platform.payment.system.list'));
    });

// Platform > PaymentSystem > Edit
Route::screen('payment-system/{payment_system}/edit', PaymentSystemEditScreen::class)
    ->name('platform.payment-system.edit')
    ->breadcrumbs(function (Trail $trail, $payment_system) {
        return $trail
            ->parent('platform.payment.system.list')
            ->push(__('Edit'), route('platform.payment-system.edit', $payment_system));
    });

<?php
use App\Orchid\Screens\PaymentSystem\PaymentPromocodeEditScreen;
use App\Orchid\Screens\PaymentSystem\PaymentPromocodeListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > PaymentPromocode > List
Route::screen('payment-promocodes', PaymentPromocodeListScreen::class)
    ->name('platform.payment.promocode.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Промокоды для пополнений'), route('platform.payment.promocode.list'));
    });

// Platform > PaymentPromocode > Edit
Route::screen('payment-promocode/{payment_promocode}/edit', PaymentPromocodeEditScreen::class)
    ->name('platform.payment-promocode.edit')
    ->breadcrumbs(function (Trail $trail, $payment_promocode) {
        return $trail
            ->parent('platform.payment.promocode.list')
            ->push(__('Edit'), route('platform.payment-promocode.edit', $payment_promocode));
    });

// Platform > PaymentPromocode > Create
Route::screen('payment-promocode/create', PaymentPromocodeEditScreen::class)
    ->name('platform.payment-promocode.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.payment.promocode.list')
            ->push(__('Create'), route('platform.payment-promocode.create'));
    });
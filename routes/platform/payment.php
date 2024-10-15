<?php
use App\Orchid\Screens\PaymentSystem\PaymentListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > Payment > List
Route::screen('payments', PaymentListScreen::class)
    ->name('platform.payment.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Платежи'), route('platform.payment.list'));
    });
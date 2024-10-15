<?php

use App\Orchid\Screens\Notification\NotificationScreen as PlayerNotificationScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > Notifications
Route::screen('send-notifications', PlayerNotificationScreen::class)
    ->name('platform.send-notification')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Уведомления'), route('platform.send-notification'));
    });
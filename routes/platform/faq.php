<?php
use App\Orchid\Screens\FAQ\FAQEditScreen;
use App\Orchid\Screens\FAQ\FAQListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > FAQ > List
Route::screen('faqs', FAQListScreen::class)
    ->name('platform.faq.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('FAQ'), route('platform.faq.list'));
    });

// Platform > FAQ > Edit
Route::screen('faq/{faq}/edit', FAQEditScreen::class)
    ->name('platform.faq.edit')
    ->breadcrumbs(function (Trail $trail, $faq) {
        return $trail
            ->parent('platform.faq.list')
            ->push(__('Edit'), route('platform.faq.edit', $faq));
    });

// Platform > FAQ > Create
Route::screen('faq/create', FAQEditScreen::class)
    ->name('platform.faq.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.faq.list')
            ->push(__('Create'), route('platform.faq.create'));
    });
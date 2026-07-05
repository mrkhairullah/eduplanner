<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::name('dashboard.')
    ->prefix('/dashboard')
    ->group(function () {
        Route::livewire('/', 'pages::dashboard.overview')
            ->name('overview');

        Route::name('users.')
            ->prefix('/users')
            ->group(function () {
                Route::livewire('/', 'pages::dashboard.users.index')
                    ->name('index');
                Route::livewire('/create', 'pages::dashboard.users.create')
                    ->name('create');
                Route::livewire('/{user}/edit', 'pages::dashboard.users.edit')
                    ->name('edit');
            });
    });

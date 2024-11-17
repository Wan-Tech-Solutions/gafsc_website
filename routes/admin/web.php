<?php

declare(strict_types=1);

use App\Http\Controllers\Front\Admin\Account\UsersController;
use App\Http\Controllers\Front\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Front\Admin\DashboardLinksController;
use App\Http\Controllers\Front\Admin\Profile\ProfileController;
use App\Http\Controllers\Front\Admin\Settings\SettingsController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Front\Admin', 'as' => 'admin.'], function () {
    Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'accounts', 'as' => 'accounts.'], function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('/create', [UsersController::class, 'create'])->name('create');
        Route::get('/edit/{user}', [UsersController::class, 'edit'])->name('edit');

        Route::group(['prefix' => 'profile'], function () {
            Route::get('/{user}', [UsersController::class, 'profile'])->name('profile');
        });
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/', [SettingsController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('/', [DashboardLinksController::class, 'banner'])->name('index');
        Route::get('/create', [DashboardLinksController::class, 'create_banner'])->name('create');
        Route::get('/edit/{banner}', [DashboardLinksController::class, 'edit_banner'])->name('edit');
    });

    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/', [DashboardLinksController::class, 'blog'])->name('index');
        Route::get('/create', [DashboardLinksController::class, 'create_blog'])->name('create');
        Route::get('/edit/{blog}', [DashboardLinksController::class, 'edit_blog'])->name('edit');
    });

    Route::group(['prefix' => 'publication', 'as' => 'publication.'], function () {
        Route::get('/', [DashboardLinksController::class, 'publication'])->name('index');
        Route::get('/create', [DashboardLinksController::class, 'create_publication'])->name('create');
        Route::get('/edit/{publication}', [DashboardLinksController::class, 'edit_publication'])->name('edit');
    });

    Route::group(['prefix' => 'faq', 'as' => 'faq.'], function () {
        Route::get('/', [DashboardLinksController::class, 'faq'])->name('index');
        Route::get('/create', [DashboardLinksController::class, 'create_faq'])->name('create');
        Route::get('/edit/{faq}', [DashboardLinksController::class, 'edit_faq'])->name('edit');
    });

    Route::group(['prefix' => 'career', 'as' => 'career.'], function () {
        Route::get('/', [DashboardLinksController::class, 'career'])->name('index');
        Route::get('/create', [DashboardLinksController::class, 'create_career'])->name('create');
        Route::get('/edit/{career}', [DashboardLinksController::class, 'edit_career'])->name('edit');
    });

    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
        Route::get('/', [DashboardLinksController::class, 'gallery'])->name('index');
        Route::get('/create', [DashboardLinksController::class, 'create_gallery'])->name('create');
    });

    Route::group(['prefix' => 'notice-board', 'as' => 'noticeboard.'], function () {
        Route::get('/', [DashboardLinksController::class, 'noticeboard'])->name('index');
        Route::get('/create', [DashboardLinksController::class, 'create_noticeboard'])->name('create');
        Route::get('/edit/{noticeboard}', [DashboardLinksController::class, 'edit_noticeboard'])->name('edit');
    });

    Route::group(['prefix' => 'downloads', 'as' => 'download.'], function () {
        Route::get('/', [DashboardLinksController::class, 'downloads'])->name('index');
        Route::get('/create', [DashboardLinksController::class, 'create_downloads'])->name('create');
        Route::get('/edit/{downloads}', [DashboardLinksController::class, 'edit_downloads'])->name('edit');
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::get('/photo', [ProfileController::class, 'photo'])->name('photo');
        Route::get('/security', [ProfileController::class, 'security'])->name('security');
    });
});

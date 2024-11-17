<?php

declare(strict_types=1);

use App\Http\Controllers\Api\Admin\Accounts\AccountsController;
use App\Http\Controllers\Api\Admin\Accounts\UsersDatatable;
use App\Http\Controllers\Api\Admin\Banner\BannerController;
use App\Http\Controllers\Api\Admin\Banner\BannerUploadController;
use App\Http\Controllers\Api\Admin\Blog\BlogController;
use App\Http\Controllers\Api\Admin\Blog\BlogImageUploadController;
use App\Http\Controllers\Api\Admin\Career\CareerController;
use App\Http\Controllers\Api\Admin\Download\DownloadController;
use App\Http\Controllers\Api\Admin\Download\DownloadUploadController;
use App\Http\Controllers\Api\Admin\Faq\FaqController;
use App\Http\Controllers\Api\Admin\Gallery\GalleryController;
use App\Http\Controllers\Api\Admin\Gallery\GalleryUploadController;
use App\Http\Controllers\Api\Admin\Noticeboard\NoticeboardController;
use App\Http\Controllers\Api\Admin\Noticeboard\NoticeboardImageUploadController;
use App\Http\Controllers\Api\Admin\Profile\PasswordController;
use App\Http\Controllers\Api\Admin\Profile\PersonalInfoController;
use App\Http\Controllers\Api\Admin\Profile\ProfileController;
use App\Http\Controllers\Api\Admin\Profile\UserProfilePhotoController;
use App\Http\Controllers\Api\Admin\Publication\PublicationController;
use App\Http\Controllers\Api\Admin\Settings\SettingsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'api.admin.'], function () {
    Route::apiResources([
        'banner' => BannerController::class,
        'blog' => BlogController::class,
        'publication' => PublicationController::class,
        'noticeboard' => NoticeboardController::class,
        'gallery' => GalleryController::class,
        'download' => DownloadController::class,
        'faq' => FaqController::class,
        'career' => CareerController::class,

    ]);

    Route::post('/banner-image-upload', [BannerUploadController::class, 'banner'])->name('upload.banner');
    Route::post('/blog-image-upload', [BlogImageUploadController::class, 'blog'])->name('upload.blog');
    Route::post('/noticeboard-image-upload', [NoticeboardImageUploadController::class, 'noticeboard'])->name('upload.noticeboard');
    Route::post('/image-upload', [BlogImageUploadController::class, 'upload'])->name('upload.image');
    Route::post('/gallery-upload', [GalleryUploadController::class, 'gallery'])->name('upload.gallery');
    Route::post('/download-upload', [DownloadUploadController::class, 'download'])->name('upload.download');

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::post('/currency', [SettingsController::class, 'currency'])->name('currency');
        Route::post('/bonus', [SettingsController::class, 'bonus'])->name('bonus');
        Route::post('/contact', [SettingsController::class, 'contact'])->name('contact');
    });

    Route::group(['prefix' => 'accounts', 'as' => 'accounts.'], function () {
        Route::get('/users', UsersDatatable::class)->name('users-datatable');
        Route::post('/store', [AccountsController::class, 'store'])->name('store');
        Route::patch('/block/{user}', [AccountsController::class, 'update'])->name('update');
        Route::delete('/delete/{user}', [AccountsController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/user', ProfileController::class)->name('user');
        Route::post('/photo', UserProfilePhotoController::class)->name('photo');
        Route::post('/password', PasswordController::class)->name('password');
        Route::post('/personal', PersonalInfoController::class)->name('personal-info');
    });
});

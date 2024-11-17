<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Blog;
use App\Models\Download;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (app()->environment(['production'])) {
            $this->app->bind('path.public', function () {
                return realpath(base_path().'/public_html');
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();

        $blogs = Cache::rememberForever('blogs', function () {
            return Blog::whereStatus(1)->latest()->take(6)->get();
        });

        $downloads = Cache::rememberForever('downloads', function () {
            return Download::latest()->take(2)->get();
        });

        View::share([
            'blogs' => $blogs,
            'downloads' => $downloads,
            'config' => system_all(),
        ]);

        view()->share('', );
    }
}

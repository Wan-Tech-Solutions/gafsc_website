<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Noticeboard;
use App\Models\Publication;
use Illuminate\Support\Facades\Cache;
use Rmunate\Utilities\SpellNumber;

class HomepageController extends Controller
{
    public function index()
    {
        // dd(SpellNumber::value(70000.902)->currency('cedis')->fraction('pesewas')->toMoney());

        $banners = Cache::rememberForever('banners', function () {
            return Banner::whereStatus(1)->orderBy('order_of_appearance')->get();
        });

        $publications = Cache::rememberForever('publications', function () {
            return Publication::whereStatus(1)->latest()->take(3)->get();
        });

        $noticeboard = Cache::rememberForever('noticeboard', function () {
            return Noticeboard::whereStatus(1)->latest()->first();
        });

        return view('website.index', [
            'banners' => $banners,
            'publications' => $publications,
            'noticeboard' => $noticeboard,
        ]);
    }

    // blog
    public function blogs()
    {
        $blogs = Blog::whereStatus(1)->latest()->paginate(50);

        return view('website.pages.about.news', compact('blogs'));
    }

    public function blog(Blog $blog)
    {
        return view('website.pages.about.single-news', compact('blog'));
    }

    // publications
    public function publications()
    {
        $publications = Publication::whereStatus(1)->latest()->paginate(50);

        return view('website.pages.resources.publications', compact('publications'));
    }

    public function publication(Publication $publication)
    {
        return view('website.pages.resources.publication', compact('publication'));
    }
}

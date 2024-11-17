<?php

namespace App\Http\Controllers\Front\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Download;
use App\Models\Faq;
use App\Models\Noticeboard;
use App\Models\Publication;

class DashboardLinksController extends Controller
{
    // banner
    public function banner()
    {
        return view('admin.pages.banner.index');
    }

    public function create_banner()
    {
        return view('admin.pages.banner.create');
    }

    public function edit_banner(Banner $banner)
    {
        return view('admin.pages.banner.edit', [
            'banner' => $banner,
        ]);
    }

    // blog
    public function blog()
    {
        return view('admin.pages.blog.index');
    }

    public function create_blog()
    {
        return view('admin.pages.blog.create');
    }

    public function edit_blog(Blog $blog)
    {
        return view('admin.pages.blog.edit', [
            'blog' => $blog,
        ]);
    }

    // publication

    public function publication()
    {
        return view('admin.pages.publication.index');
    }

    public function create_publication()
    {
        return view('admin.pages.publication.create');
    }

    public function edit_publication(Publication $publication)
    {
        return view('admin.pages.publication.edit', [
            'publication' => $publication,
        ]);
    }

    // noticeboard
    public function noticeboard()
    {
        return view('admin.pages.noticeboard.index');
    }

    public function create_noticeboard()
    {
        return view('admin.pages.noticeboard.create');
    }

    public function edit_noticeboard(Noticeboard $noticeboard)
    {
        return view('admin.pages.noticeboard.edit', [
            'noticeboard' => $noticeboard,
        ]);
    }

    // gallery

    public function gallery()
    {
        return view('admin.pages.gallery.index');
    }

    public function create_gallery()
    {
        return view('admin.pages.gallery.create');
    }

    // downloads
    public function downloads()
    {
        return view('admin.pages.downloads.index');
    }

    public function create_downloads()
    {
        return view('admin.pages.downloads.create');
    }

    public function edit_downloads(Download $download)
    {
        return view('admin.pages.downloads.edit', [
            'download' => $download,
        ]);
    }

    // faq

    public function faq()
    {
        return view('admin.pages.faq.index');
    }

    public function create_faq()
    {
        return view('admin.pages.faq.create');
    }

    public function edit_faq(Faq $faq)
    {
        return view('admin.pages.faq.edit', [
            'faq' => $faq,
        ]);
    }

    // career

    public function career()
    {
        return view('admin.pages.career.index');
    }

    public function create_career()
    {
        return view('admin.pages.career.create');
    }

    public function edit_career(Career $career)
    {
        return view('admin.pages.career.edit', [
            'career' => $career,
        ]);
    }
}

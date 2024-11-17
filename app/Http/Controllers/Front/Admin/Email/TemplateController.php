<?php

namespace App\Http\Controllers\Front\Admin\Email;

use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public function index()
    {
        return view('admin.pages.template.index');
    }

    public function compose()
    {
        return view('admin.pages.template.compose');
    }
}

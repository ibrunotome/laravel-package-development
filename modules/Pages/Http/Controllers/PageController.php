<?php

namespace Modules\Pages\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Pages\Page;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('Page::index', compact('pages'));
    }

    public function view()
    {
        echo config('pages.home');
        echo config('pages.error_page');
    }
}
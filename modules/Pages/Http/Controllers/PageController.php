<?php

namespace Modules\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('Pages::index');
    }
}
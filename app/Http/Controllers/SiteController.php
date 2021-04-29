<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function api()
    {
        return view('site.home.api');
    }
}

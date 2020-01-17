<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    //
    public function portfolio()
    {
        return view('frontend-pages.portfolio');
    }
    public function company()
    {
        return view('frontend-pages.portfolio');
    }
    public function enterpriseMessaging()
    {
        return view('frontend-pages.enterprise-messaging');
    }
    public function voice()
    {
        return view('frontend-pages.voice');
    }
    public function mobileVas()
    {
        return view('frontend-pages.mobile-vas');
    }
    public function digitalMarketing()
    {
        return view('frontend-pages.digital-marketing');
    }
    public function contentDistribution()
    {
        return view('frontend-pages.content-distribution');
    }
}

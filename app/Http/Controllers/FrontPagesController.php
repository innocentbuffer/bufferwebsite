<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    //
    public $otherPages = true;

    public function portfolio()
    {
        return view('frontend-pages.portfolio', ['otherPages'=>$this->otherPages]);
    }
    public function company()
    {
        return view('frontend-pages.company', ['otherPages'=>$this->otherPages]);
    }
    public function enterpriseMessaging()
    {
        return view('frontend-pages.enterprise-messaging', ['otherPages'=>$this->otherPages]);
    }
    public function voice()
    {
        return view('frontend-pages.voice', ['otherPages'=>$this->otherPages]);
    }
    public function connectivity()
    {
        return view('frontend-pages.connectivity');
    }
    public function digitalMarketing()
    {
        return view('frontend-pages.digital-marketing', ['otherPages'=>$this->otherPages]);
    }
    public function contentDistribution()
    {
        return view('frontend-pages.content-distribution', ['otherPages'=>$this->otherPages]);
    }
}

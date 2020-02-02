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
        return view('frontend-pages.connectivity', ['otherPages'=>$this->otherPages]);
    }
    public function digitalMarketing()
    {
        return view('frontend-pages.digital-marketing', ['otherPages'=>$this->otherPages]);
    }
    public function product()
    {
        return view('frontend-pages.product', ['otherPages'=>$this->otherPages]);
    }
    public function contactUs()
    {
        return view('frontend-pages.contact-us', ['otherPages'=>$this->otherPages]);
    }
}

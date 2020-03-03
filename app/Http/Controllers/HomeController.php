<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Qoute;
use App\Contact;
use App\Newsletter;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalQoutes = count(Qoute::all());
        $totalContacts = count(Contact::all());
        $totalNewsletters = count(Newsletter::all());
        $totalUsers = count(User::all());
        $role = "";
        foreach(Auth::user()->roles as $role)
        {
            $role = $role->name;
        }
        return view('dashboard', ['totalQoutes'=>$totalQoutes, 'totalContacts'=>$totalContacts, 'totalNewsletters'=>$totalNewsletters, 'totalUsers'=>$totalUsers, 'role'=>$role]);
    }
}

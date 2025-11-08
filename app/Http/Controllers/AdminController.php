<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function products()
    {
        return view('admin.products');
    }

    public function orders()
    {
        return view('admin.orders');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function blog()
    {
        return view('admin.blog');
    }

    public function marketing()
    {
        return view('admin.marketing');
    }

    public function logs()
    {
        return view('admin.logs');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function siteSettings()
    {
        return view('admin.site-settings');
    }

    public function smtp()
    {
        return view('admin.smtp');
    }
}
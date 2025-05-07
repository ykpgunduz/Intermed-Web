<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function products()
    {
        return view('products');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }
}

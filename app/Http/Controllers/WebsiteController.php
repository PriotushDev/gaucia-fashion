<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function all_products()
    {
        return view('website.category.all-product');
    }

    public function new_arrivals()
    {
        return view('website.category.new-arrivals');
    }

}

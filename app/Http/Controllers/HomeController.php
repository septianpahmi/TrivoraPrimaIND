<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Service;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)->orderBy('sort_order')
            ->limit(6)->get();
        $services = Service::where('is_active', true)->orderBy('sort_order')
            ->limit(4)->get();
        $portofolios = Portfolio::where('is_active', true)->orderBy('sort_order')->get();
        $profile = WebsiteSetting::where('id', 1)->first();
        return view('main', compact('products', 'services', 'portofolios', 'profile'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->with('category')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();
        $profile = WebsiteSetting::where('id', 1)->first();
        return view('pages.product.index', compact('products', 'profile'));
    }

    public function detail(Product $product)
    {
        abort_unless($product->is_active, 404);

        $product->load([
            'category',
            'spesifikasi',
        ]);
        $profile = WebsiteSetting::where('id', 1)->first();
        return view('pages.product.detail', compact('product', 'profile'));
    }
}

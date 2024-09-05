<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function indexPage()
    {
        return view('frontend.index', [
            'products' => Product::with('images', 'category')->get(),
        ]);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $getUserBasket = Basket::where('user_id', Auth::id())->first();
        $getBasket = BasketItem::where('basket_id', $getUserBasket->id)->with('product', 'images')->get();
        return view('frontend.order.index', [
            'cart' => $getBasket
        ]);
    }
}

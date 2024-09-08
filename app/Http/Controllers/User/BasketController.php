<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function index()
    {
        $getUserBasket = Basket::where('user_id', Auth::id())->first();
        $getBasket = BasketItem::where('basket_id', $getUserBasket->id)->with('product', 'images')->get();
        return view('frontend.users.basket.index', [
            'basket_price' => $getUserBasket->total_price,
            'cart' => $getBasket,
        ]);
    }

    public function store(Product $product)
    {
        $getBasket = Basket::where('user_id', Auth::id())->first();
        if(is_null($getBasket)){
            $basket = Basket::create([
                'user_id' => Auth::id(),
                'total_price' => $product->price
            ]);
            BasketItem::create([
                'basket_id' => $basket->id,
                'product_id' => $product->id,
                'count' => 1
            ]);
        }
        else {
            $getBasket->update([
                'total_price' => $getBasket->total_price + $product->price
            ]);
            BasketItem::create([
               'basket_id' => $getBasket->id,
                'product_id' => $product->id,
                'count' => 1
            ]);
        }
        return redirect()->back();
    }
}

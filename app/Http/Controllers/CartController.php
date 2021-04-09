<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        return view('cart', compact('order'));
    }

    public function cartPlace(){
        return view('order');
    }

    //добавление товара в корзину
    public function cartAdd($productId){
        $orderId = session('orderId');
        if (is_null($orderId)){
            $order = Order::create([

            ])->id;
            session(['orderId'=>$order->id]);
        }
        else
        {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);

        return view('cart', compact('order'));

        dump($orderId);
    }
}

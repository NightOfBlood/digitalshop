<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //добавление в корзину
    public static function actionAddToCart(Request $req ){
        //dd($req->get('id'));
    // создать бд (корзина)
        $productsInCart=array();

        if ($req->session()->has('products')) {
            $productsInCart = $req->session()->get('products', 'default');
        }

        $id=$req->get('$id');
        if (Arr::exists($productsInCart,$id)){
            $productsInCart[$id]++;
        }
        else
            $productsInCart[$id]=1;
        dd($productsInCart);
        $req->session()->put('products', $productsInCart);

        return countItems($req);
    }

    public static function countItems(Request $req){

        if ($req->session()->has('products')){
            $count=0;
            foreach($req->session()->get('products', 'default') as $id=>$quantity){
                $count+=$quantity;
            }
            return $count;
        }
        else return 0;
    }
}

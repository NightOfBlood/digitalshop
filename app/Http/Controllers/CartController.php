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
        if ($req->session()->exists('products')) {
            $productsInCart = $req->session()->get('products');
        }
        else
            $req->session()->push('products', []);
        $id=$req->get('id');
        dd($req);
       /* if (Arr::exists($productsInCart,$id)){
            $productsInCart[$id]++;
        }
        else*/
            //$productsInCart[$id]=1;
        array_push($productsInCart,$id);
        $req->session()->put('products', array($id=>1));
        //dd($req);
        return 0;//countItems($req);


    }

    public static function countItems(Request $req){

        if ($req->session()->has('products')){
            $count=0;
            foreach($req->session()->get('products', 'default') as $id=>$quantity){
                $count+=$quantity;
            }
           // dd($count);
            return $count;
        }
        else return 0;
    }
}

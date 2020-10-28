<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //добавление в корзину
    public static function actionAddToCart(Request $req ){
        dd($req);
        /*$productsInCart=array();
        $id=intval($id);
        if (isset($_SESSION['products'])){
            $productsInCart=$_SESSION['products'];
        }
        if (array_key_exists($id,$productsInCart)){
            $productsInCart[$id]++;
        }
        else
            $productsInCart[$id]=1;

        $_SESSION['products']=$productsInCart;

        return self::countItems();*/
    }

    public static function countItems(){
        if(isset($_SESSION['products'])){
            $count=0;
            foreach($_SESSION['products'] as $id=>$quantity){
                $count+=$quantity;
            }
            return $count;
        }
        else return 0;
    }
}

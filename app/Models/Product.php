<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public static function getProductInformation($id){
        return Product::query()->where('id', '=', "{$id}")->first();
    }

    public static function getProductsListByCategory($id){
        return Product::query()->where('category', '=',"{$id}")->get();
    }

    public static function getLastProducts(){
        return Product::query()->limit(3)->orderBy('id', 'desc')->get();
    }


}

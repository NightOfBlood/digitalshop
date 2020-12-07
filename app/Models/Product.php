<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name'];

    public static function getProduct(){
        return Product::all();
    }

    public static function getProductInformation($id){
        return Product::query()->where('id', '=', "{$id}")->first();
    }

    public static function getProductsListByCategory($id){
        return Product::query()->where('category', '=',"{$id}")->paginate(6);
    }

    public static function getLastProducts(){
        return Product::query()->limit(3)->orderBy('id', 'desc')->get();
    }


}

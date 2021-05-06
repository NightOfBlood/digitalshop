<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public static function deleteProduct($id)
    {
        return Goods::query()->where('id', '=', "{$id}");
    }

    protected $fillable = [
        'name',
        'description',
        'image',
        'count',
        'price',
        'category',
        'country',
        'brand',
    ];

    public static function getProduct()
    {
        return Goods::all();
    }

    public static function getProductInformation($id)
    {
        return Goods::query()->where('id', '=', "{$id}")->first();
    }

    public static function getProductsListByCategory($id)
    {
        return Goods::query()->where('category', '=', "{$id}")->paginate(6);
    }

    public static function getLastProducts()
    {
        return Goods::query()->limit(3)->orderBy('id', 'desc')->get();
    }

}

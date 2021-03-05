<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function actionView($id){
        $product=Product::getProductInformation($id);
        $categories= Category::getCategory();
        //dd($categories);
        //$uuid_user="1";
        //Product::addMark($uuid_user,$id);

        return view('product.product', ['product'=>$product,'categories'=>$categories]);
    }
}

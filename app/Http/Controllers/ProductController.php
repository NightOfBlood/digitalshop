<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function actionView($id){
        $product=Product::getProductInformation($id);
        //$uuid_user="1";
        //Product::addMark($uuid_user,$id);

        return view('product.product', ['product'=>$product]);
    }
}

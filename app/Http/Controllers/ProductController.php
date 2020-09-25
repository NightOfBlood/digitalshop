<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function actionView($id){
        $product=Product::getProductById($id);
        $uuid_user="1";
        Product::addMark($uuid_user,$id);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;


class AdminController extends Controller
{
    public function actionProduct(){
        $productList = Product::getProduct();
        return view('admin/product/product', ['productList'=>$productList]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function actionIndex(){
       $category = new Category();
       $lastItems = Product::getLastProducts();
       return view('main',['categories'=>$category->all(),'lastItems'=>$lastItems]);
    }

}

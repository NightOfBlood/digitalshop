<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SiteController extends Controller
{
    public function actionIndex(){
       $category = new Category();
        /*  $categories = Category::getCategoriesList();
         $sliderProducts = Product::getRecommendedProducts('1');
         $lastItems = Product::getLastProducts();*/
        return view('main',['categories'=>$category->all()]);
    }
}

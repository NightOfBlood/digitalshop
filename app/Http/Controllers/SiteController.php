<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Goods;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function actionIndex(){
       $category = new Category();
       $lastItems = Goods::getLastProducts();

       return view('main',['categories'=>$category->all(),'lastItems'=>$lastItems]);
    }

}

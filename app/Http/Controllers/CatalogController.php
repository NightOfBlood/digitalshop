<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function actionCategory($id){
        $categoryProducts =array();
        $categoryProducts = Product::getProductsListByCategory($id);

        $category = new Category();
        //dd($categoryProducts);
        return view('catalog.category',['categories'=>$category->all(),'categoryProducts'=>$categoryProducts]);
    }
}

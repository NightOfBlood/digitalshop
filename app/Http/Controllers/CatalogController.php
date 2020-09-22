<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function actionCategory($id){
        $categoryProduct=array();
        $categoryProducts = Products::getProductsListByCategory($id);
        $categories = array();
        $categories = Category::getCategoriesList();

        return true;
    }
}

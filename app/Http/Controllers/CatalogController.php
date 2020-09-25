<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function actionCategory($id){
        $categoryProducts =array();
        $categoryProducts = Products::getProductsListByCategory($id);
        $categories = array();
        $categories = Category::getCategoriesList();

        return true;
    }
}

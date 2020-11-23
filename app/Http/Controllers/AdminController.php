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

    public function createProduct(){
        $categoriesList= Product::getCategoriesList();

        if(isset( $_POST['submit'])) {
            $product['name'] = $_POST['name'];
            $product['description'] = $_POST['description'];
            $product['image'] = $_POST['image'];
            $product['count'] = $_POST['count'];
            $product['price'] = $_POST['price'];
            $product['category'] = $_POST['category'];
            $product['country'] = $_POST['country'];
            $product['brand'] = $_POST['brand'];
            $product['novelty'] = $_POST['novelty'];
            $product['availability'] = $_POST['availability'];


            $errors = false;
            if (!isset($product['name']) || empty($product['name'])) {
                $errors[] = 'Заполните поля';
            }
            return view('admin/product/create', ['product'=>$product]);
        }
    }
}

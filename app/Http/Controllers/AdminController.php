<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;



class AdminController extends Controller
{
    public function actionProduct(){
        $productList = Product::getProduct();
        return view('admin/product/product', ['productList'=>$productList]);

    }

    public function createProduct(Request $request)//переменная, содержащая параметры запроса
    {
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'count' => $request->input('count'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'country' => $request->input('country'),
            'brand' => $request->input('brand')
        ]);
            //ч>return redirect()->route('productView')->with('info','Товар добавлен');
    }

    public function formProduct(){
        return view('admin/product/create');

    }

    public function actionCategory(){
        $categoriesList=Category::getCategory();
        return view('admin/category/category', ['categoriesList'=>$categoriesList]);
    }

    public function actionOrder(){
        $ordersList=Order::getOrdersList();
        return view('admin/order/order', ['ordersList'=>$ordersList]);
    }

}

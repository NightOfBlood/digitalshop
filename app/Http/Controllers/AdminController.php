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
            'brand' => $request->input('brand'),
            //'novelty' => $request->input('novelty'),
            //'availability' => $request->input('availability')
        ]);
            return redirect()->route('admin/product')->with('info','Товар добавлен');
    }
}

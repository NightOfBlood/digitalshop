<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Order;
use App\Models\user;



class AdminController extends Controller
{
    public function actionProduct(){
        $productList = Goods::getProduct();
        //$value = Session::get('key');
       //сессия пользователя
        //dd(session()->getId());
        //id  пользователя
       // dd(auth()->user()->id);

        return view('admin/product/product', ['productList'=>$productList]);

    }

    public function createProduct(Request $request)//переменная, содержащая параметры запроса
    {

        Goods::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'count' => $request->input('count'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'country' => $request->input('country'),
            'brand' => $request->input('brand')
        ]);
            return redirect()->route('productView')->with('info','Товар добавлен');
    }

    public function createCategory(Request $request)//переменная, содержащая параметры запроса
    {

        Category::create([
            'name' => $request->input('name'),
            ]);
        return redirect()->route('adminPage')->with('info','Товар добавлен');
    }


    public function formProduct(){
        return view('admin/product/create');

    }

    //Удаление товара
    public function deleteProduct($id)//переменная, содержащая параметры запроса
    {
            $product = Goods::find($id);
            $product -> delete();

            return redirect()->route('productView')->with('info','Товар удален');
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|max:255',
            'description'=> 'required|max:2155',
            'count'=> 'required|max:255',
            'category'=> 'required|max:255',
            'country'=> 'required|max:255',
            'brand'=> 'required|max:255',
            'price'=> 'required|max:255',

        ]);
        $product = Goods::find($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->image = $request->get('image');
        $product->count = $request->get('count');
        $product->category = $request->get('category');
        $product->country = $request->get('country');
        $product->brand = $request->get('brand');
        $product->price = $request->get('price');
        $product->save();

        return redirect('/admin/product/')->with('success', 'Пост успешно отредактирован!');
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|max:255',
        ]);
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->save();

        return redirect('/admin/category/')->with('success', 'Категория успешно отредактирована!');
    }

    public function editCategory($id)//переменная, содержащая параметры запроса
    {
        $category = Category::find($id);
        // dd($product);
        return view('admin/category/update', compact('category'));
    }

    public function editProduct($id)//переменная, содержащая параметры запроса
    {
        $product = Goods::find($id);
       // dd($product);
        return view('admin/product/update', compact('product'));
    }

    public function actionCategory(){
        $categoriesList=Category::getCategory();
        return view('admin/category/category', ['categoriesList'=>$categoriesList]);
    }

    //Удаление категории ( Работа с категориями )
   public function deleteCategory($id)//переменная, содержащая параметры запроса
    {
        $product = Category::find($id);
        $product -> delete();

        return redirect()->route('adminPage')->with('info','Категория была удалена');
    }


    public function actionOrder(){
        $listOrders=Order::getOrdersList();
        //dd($order[0]['id']);
        //dd($_REQUEST);
        return view('admin/order/order', compact('listOrders'));
    }

    //показ информации о товарах ( Работа с товарами )
    public function getInformationAboutProduct(){
        $product=Goods::getProduct();
        return view('admin/product/show', ['product'=>$product]);
    }

    public function deleteUser($id)//переменная, содержащая параметры запроса
    {
        $user = user::find($id);
        $user -> delete();

        return redirect()->route('adminUser')->with('info','Пользователь был удален');
    }
}

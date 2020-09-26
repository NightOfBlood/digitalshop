<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getProductsListByCategory($id=false)
    {
        $db = DataBase::connect();
        $products = array();
        $result = $db->query("SELECT * FROM products WHERE categories = '$id'");
        $i = 0;

        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['image'] = $row['image'];
            $products[$i]['count'] = $row['count'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['country'] = $row['country'];
            $products[$i]['brand'] = $row['brand'];
            $i++;
        }
        return $products;
    }

    public static function getLastProducts(){
        return Product::query()->limit(3)->orderBy('id', 'desc')->get();

//        $db=DataBase::connect();
//        $result=$db->query("SELECT * FROM products ORDER BY id DESC LIMIT 3 ");
//        $productList=array();
//        $i=0;
//        while($row=$result->fetch()){
//            $productList[$i]['id']=$row['id'];
//            $productList[$i]['name']=$row['name'];
//            $productList[$i]['description']=$row['description'];
//            $productList[$i]['image']=$row['image'];
//            $productList[$i]['count']=$row['count'];
//            $productList[$i]['price']=$row['price'];
//            $products[$i]['country'] = $row['country'];
//            $products[$i]['brand'] = $row['brand'];
//            $productList[$i]['category']=$row['category'];
//            $i++;
//        }
//        return $productList;

    }


}

<?php

namespace App;

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
            $products[$i]['id'] = $row['productId'];
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
}

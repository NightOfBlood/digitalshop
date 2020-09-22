<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getCategoriesList(){
        $db = DataBase::connect();
        $categories = array();
        $result = $db->query('SELECT * FROM categories');
        $i = 0;
        while ($row = $result->fetch()){
            $categories[$i]['id']=$row['id'];
            $categories[$i]['name']=$row['name'];
            $i++;

        }
        return $categories;
    }
}

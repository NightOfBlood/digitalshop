<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getCategory(){
        return Category::all();
    }

    public static function deleteCategory($id){
        return Category::query()->where('id','=', "{$id}");
    }

}

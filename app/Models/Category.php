<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public static function getCategory(){
        return Category::all();
    }

    public static function deleteCategory($id){
        return Category::query()->where('id','=', "{$id}");
    }

}

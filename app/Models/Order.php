<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static function getOrdersList(){
        return Order::all();
    }
}

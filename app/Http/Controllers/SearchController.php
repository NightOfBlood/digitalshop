<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $seacrh = $request->search;
        //dd($request);
        //dd($search);
    }
}

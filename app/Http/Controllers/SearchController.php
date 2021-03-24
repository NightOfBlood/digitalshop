<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResults(Request $request){
        //dd($request);
        $query=$request->input('query');
        //dd($query);
        if (!$query){
            redirect()->route('/');
        }
        $products = Product::where(DB::raw('name'), 'LIKE', "%{$query}" )
            ->orWhere('brand', 'LIKE', "%{$query}")
            ->get();
        //dd($products);
        return view('search/results')->with('products', $products);
    }
    /*
    public function search(Request $request){
        //$s = $request->s;
        //dd($s);
    }
    */
}

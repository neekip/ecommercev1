<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::where('name','like','%'.$request->term.'%')->orWhere('author','like','%'.$request->term.'%')
                            ->paginate(24);

        return view('front.search.index', compact('products'));
    }

    public function autocomplete(Request $request)
    {
         $result = Product::where('name','like','%'.$request->term.'%')->get();

         return response()->json($result);

    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('products');
           // Set Meta Home
           metaGenerate($metaBanner);
           $query =  \App\Models\Product::active()->orderBy('sort', 'asc');
           $categoryId = \App\Models\Category::first()->id;
           if (request()->category) {
               $categoryId = request()->category;
           }
        //    if (request()->has('category')) {
               $query = $query->where('category_id', $categoryId);
        //    }

        return view('front.products.index',[
            'products' =>  $query->get(),
            'categories' => \App\Models\Category::get(),
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('products');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.products.show',[
            'product' =>  \App\Models\Product::findOrFail($id),
            'metaBanner' => $metaBanner
        ]);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner = getMeta('packages');
           // Set Meta Home
           metaGenerate($metaBanner);

           $query =  \App\Models\Package::query();

           $categoryId = \App\Models\Category::first()->id;
           if (request()->category) {
               $categoryId = request()->category;
           }
               $query = $query->where('category_id', $categoryId);




        return view('front.packages.index',[
            'packages' =>  $query->get(),
            'metaBanner' => $metaBanner,
            'categories' => \App\Models\PackageCategory::get(),
            'faqs' => \App\Models\Faq::get(),
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('packages');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.packages.show',[
            'package' =>  \App\Models\Package::findOrFail($id),
            'metaBanner' => $metaBanner
        ]);
    }
}

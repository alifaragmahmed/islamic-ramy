<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner = getMeta('blogs');
           // Set Meta Home
           metaGenerate($metaBanner);
           $query =  \App\Models\Blog::Latest();


        return view('front.blogs.index',[
            'blogs' =>  $query->paginate(20),
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('blogs');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.blogs.show',[
            'blog' =>  \App\Models\Blog::findOrFail($id),
            'latestBlogs' =>  \App\Models\Blog::latest()->where('id','!=',$id)->take(5)->get(),
            'metaBanner' => $metaBanner
        ]);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner = getMeta('gallery');
           // Set Meta Home
           metaGenerate($metaBanner);
           $query =  \App\Models\Gallery::Latest();

        return view('front.gallery.index',[
            'gallery' =>  $query->get(),
            'metaBanner' => $metaBanner
        ]);
    }

    
}

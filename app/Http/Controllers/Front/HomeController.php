<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Countr;
use App\Models\CustomerOpinions;
use App\Models\Feature;
use App\Models\Slider;
use App\Models\Video;
use App\Models\WhyChoose;

class HomeController extends Controller
{
    public function index()
    {
        // Get Meta & Banner From DB
        $metaBanner = getMeta('home');
        // Set Meta Home
        metaGenerate($metaBanner);
        $about = About::first() ?? new About();

        return view('front.home.index', [
            'latestVideos' => Video::latest()->take(5)->get(),
            'sliders'      => Slider::all(),
            'slider'       => Slider::first(),
            'metaBanner'   => $metaBanner,
            'about'        => $about,
            'counters'     => Countr::all(),
            'features'     => Feature::all(),
            'whyUs'        => WhyChoose::all(),
            'customers'    => CustomerOpinions::all(),
        ]);
    }

}

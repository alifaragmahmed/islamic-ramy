<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CustomerOpinions;
use App\Models\Gallery;
use App\Models\WhyChoose;

class AboutController extends Controller
{
    public function index()
    {
        // Get Meta & Banner From DB
        $metaBanner = getMeta('about');
        // Set Meta Home
        metaGenerate($metaBanner);
        return view('front.about.index', [
            'about'      => \App\Models\About::first(),
            'steps'      => \App\Models\WorkStep::get(),
            'metaBanner' => $metaBanner,
            'counters'   => \App\Models\Countr::take(4)->get(),
            'parteners'  => \App\Models\Partener::get(),
            'features'   => \App\Models\Feature::get(),
            'guards'     => \App\Models\Guards::take(3)->get(),
            'whys'       => WhyChoose::get(),
            'customers'  => CustomerOpinions::all(),
            'gallary'    => Gallery::all(),
        ]);
    }
}

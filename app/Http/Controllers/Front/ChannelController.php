<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\VideoCategory;

class ChannelController extends Controller
{
    public function index()
    {
        // Get Meta & Banner From DB
        $metaBanner = getMeta('home');
        // Set Meta Home
        metaGenerate($metaBanner);

        return view('front.channels.index', [
            'videos'     => Video::latest()->where(function ($query) {
                if (request()->category_id) {
                    $query->where('video_category_id', request()->category_id);
                }
            })->paginate(60),
            'categories' => VideoCategory::all(),
        ]);
    }

    public function show($slug)
    {
        $video      = Video::where('slug', $slug)->firstOrFail();
        $metaBanner = getMeta('home');
        $comments   = collect([]);
        // Set Meta Home
        metaGenerate($metaBanner);
        return view('front.channels.show', [
            'resource'   => $video,
            'metaBanner' => $metaBanner,
            'comments'   => $comments,
        ]);
    }

    public function storeComment()
    {

    }

}

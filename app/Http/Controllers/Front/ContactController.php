<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Messages;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Get Meta & Banner From DB
        $metaBanner = getMeta('contact');
        // Set Meta Home
        metaGenerate($metaBanner);
        return view('front.contact.index', [
            'about'      => \App\Models\About::first(),
            'metaBanner' => $metaBanner,
            'photos'     => Gallery::take(4)->get(),
        ]);
    }

    public function send(Request $request)
    {
        $inputs = $request->all();
        Messages::create($inputs);
        return redirect()->route('front.contact')->with('success', 'Your message has been sent successfully');
    }

}

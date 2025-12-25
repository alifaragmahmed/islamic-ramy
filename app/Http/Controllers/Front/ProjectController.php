<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('project');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.projects.index',[
            'projects' =>  \App\Models\Project::Latest()->get(),
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('project');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.projects.show',[
            'project' =>  \App\Models\Project::findOrFail($id),
            'metaBanner' => $metaBanner
        ]);
    }
}

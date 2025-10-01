<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class InspiratieController extends Controller
{
    public function download($slug)
    {
        $paper = Paper::where('slug', $slug)->first();
        $title = $paper->title;
        $page = (object) ['title' => 'Download de white paper'];
        // get query string
        return view('pages.download-form', compact('slug','title','page'));
    }
    public function index()
    {
        $page = Page::where('slug', 'inspiratie')->firstOrFail();
        $papers = Paper::all();
        return view('pages.inspiratie', compact('page', 'papers'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class InspiratieController extends Controller
{
    public function download($slug)
    {
        // get query string
        return view('pages.download-form', compact('slug'));
    }
    public function index()
    {
        $page = Page::where('slug', 'inspiratie')->firstOrFail();
        $papers = Paper::all();
        return view('pages.inspiratie', compact('page', 'papers'));
    }
}

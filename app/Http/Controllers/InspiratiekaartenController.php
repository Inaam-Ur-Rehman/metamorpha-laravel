<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class InspiratiekaartenController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'aanbod/inspiratiekaarten')->firstOrFail();
        return view('pages.aanbod.inspiratiekaarten', compact('page'));
    }
}

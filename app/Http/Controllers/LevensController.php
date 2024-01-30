<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class LevensController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'aanbod/levens')->firstOrFail();
        return view('pages.aanbod.levens', compact('page'));
    }
}

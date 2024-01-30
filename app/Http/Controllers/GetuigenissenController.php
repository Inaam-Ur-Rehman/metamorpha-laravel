<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class GetuigenissenController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'getuigenissen')->firstOrFail();
        return view('pages.getuigenissen', compact('page'));
    }
}

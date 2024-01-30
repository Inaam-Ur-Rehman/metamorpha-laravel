<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class BoekController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'aanbod/boek')->firstOrFail();
        return view('pages.aanbod.boek',compact('page'));
    }
}

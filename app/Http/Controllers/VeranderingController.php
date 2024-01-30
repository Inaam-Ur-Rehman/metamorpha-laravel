<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class VeranderingController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'verandering')->firstOrFail();
        return view('pages.aanbod.verandering', compact('page'));
    }
}

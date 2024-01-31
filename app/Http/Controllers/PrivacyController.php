<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class PrivacyController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'bedrijfsinformatie')->firstOrFail();
        return view('pages.privacy-policy', compact('page'));
    }
}

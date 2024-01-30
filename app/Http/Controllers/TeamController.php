<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class TeamController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'team')->firstOrFail();
        return view('pages.team', compact('page'));
    }
}

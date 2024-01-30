<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = \Z3d0X\FilamentFabricator\Models\Page::where('slug','/')->first();
        return view('pages.home',compact('page'));
    }
}

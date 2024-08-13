<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class Loopbaancoaching extends Controller
{
    public function index(){
        $page = Page::where('slug', 'loopbaancoaching')->firstOrFail();
        return view("pages.loopbaancoaching", compact('page'));
    }
}

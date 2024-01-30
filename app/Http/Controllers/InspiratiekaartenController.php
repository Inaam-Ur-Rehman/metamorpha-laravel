<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use Z3d0X\FilamentFabricator\Models\Page;

class InspiratiekaartenController extends Controller
{
    public function download()
    {
        $file = Files::where('name', 'Inspiratiekaarten-guide')->firstOrFail();
        return response()->download(storage_path("app/public/" . $file->path));
    }
    public function index()
    {
        $page = Page::where('slug', 'aanbod/inspiratiekaarten')->firstOrFail();
        return view('pages.aanbod.inspiratiekaarten', compact('page'));
    }
}

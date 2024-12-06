<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function archive()
{
    $data = Gallery::all(); // Or use all() if you don't need pagination
    return view('gallery', ['data' => $data]);
}

public function single($title)
{
    $data = Gallery::where('title', $title)->firstOrFail();
    return view('gallery-single', ['data' => $data]);
}
}

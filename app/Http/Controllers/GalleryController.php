<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function archive($title)
    {
        $data = Gallery::where('title', $title)->firstOrFail();


        if (!$data) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('gallery-single', ['data' => $data]);
    }

    public function single($title)
    {
        $data = Gallery::where('title', $title)->firstOrFail();


        if (!$data) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('gallery-single', ['data' => $data]);
    }
}

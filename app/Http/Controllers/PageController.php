<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index($slug)
    {
        $data = Page::where('slug', $slug)->firstOrFail();
        

        if (!$data) {
            abort(404); // Display a 404 error if the post is not found
        }

        return view('page-single', ['data' => $data]);
    }
}

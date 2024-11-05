<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        $posts_all = Publication::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('publication', ['data' => $data]);
    }
}

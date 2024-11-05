<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Data; // Import the data model

class DataController extends Controller
{
    public function index()
    {
        $posts_all = Data::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('data', ['data' => $data]);
    }
}

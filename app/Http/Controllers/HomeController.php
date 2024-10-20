<?php

namespace App\Http\Controllers;
use App\Models\Home; // Import the home model

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts_all = Home::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('index', ['data' => $data]);
    }
}

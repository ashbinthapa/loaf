<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $posts_all = People::all();
        $data = [
            'posts_all' => $posts_all
        ];

        return view('people', ['data' => $data]);
    }
}

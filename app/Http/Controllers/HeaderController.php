<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;


class HeaderController extends Controller
{
    public function index()
    {
        $formattedDate = now()->format('l, F j, Y'); // Current date



        return view('partials.header', compact('formattedDate'));
    }
}

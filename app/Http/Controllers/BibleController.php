<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibleController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
}
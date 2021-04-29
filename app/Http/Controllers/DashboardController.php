<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $labels = [
            'Red',
            'Blue',
            'Yellow',
            'Green',
            'Purple',
            'Orange'
        ];
        $chartData = [12, 19, 3, 5, 2, 3];
        return view('dashboard', compact('labels', 'chartData'));
    }
}
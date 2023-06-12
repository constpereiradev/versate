<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function dashboard(): View
    {
        return view('dashboard.dashboard');

    }

    public function product(): View
    {
        return view('dashboard.product');

    }

    public function sales(): View
    {
        return view('dashboard.sales');

    }

    public function settings(): View
    {
        return view('dashboard.settings');

    }

    
}

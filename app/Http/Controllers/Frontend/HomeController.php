<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function index()
    {
            return view('Frontend.index');
    }

    public function terms() {

        return view('Frontend.terms');
    }

    public function privacy() {

        return view('Frontend.privacy');
    }
}

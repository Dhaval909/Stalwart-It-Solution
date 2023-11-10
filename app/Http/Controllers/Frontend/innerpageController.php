<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class innerpageController extends Controller
{
    Public function index()
    {
        return view('Frontend.inner-page');
    }
}

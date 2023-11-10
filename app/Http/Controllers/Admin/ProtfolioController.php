<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    public function index()
    {
        return view('Admin.portfolioss');
    }
}

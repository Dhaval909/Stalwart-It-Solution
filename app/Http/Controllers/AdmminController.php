<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }
}

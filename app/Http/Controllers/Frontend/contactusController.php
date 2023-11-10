<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactusController extends Controller
{
    Public function index()
    {
        $data = array(
            'title' => 'Contact Us |'
        );
        return view('Frontend.contactus',$data);
    }

}

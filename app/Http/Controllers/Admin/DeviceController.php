<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function add(Request $req)
    {
        $contact=new contact();
        $contact->name=$req->name;
        $contact->Email=$req->Email;
        $contact->Subject=$req->Subject;
        $contact->message=$req->message;                                   ;
        $result= $contact->save();
        if($result)
        {
            return ["result"=>"data has been saved"];
        }
        else{
            return [" result"=>"Operation failed"];
        }
    }
}

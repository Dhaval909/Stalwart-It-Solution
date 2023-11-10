<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.login');
    }
    public function makeLogin(Request $request){
        $validator =
        Validator::make($request->all(),
         [
            'password' => 'required',
            'username'=>'required',
        ]);
        if ($validator->fails()) {
            return  back()
                    ->withErrors($validator)
                    ->withInput();
        }
        $data = array(
            'username' => $request->username,
            'password'=> $request->password

        );
        if(Auth::guard('admin')->attempt($data)){
               return redirect('dashboard');

        }else{
            return back()->withErrors(['message'=>'invalid username or password']);
        }

    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }


}

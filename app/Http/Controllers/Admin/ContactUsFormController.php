<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller
{
   public function createForm(Request $request)
    {
        return view('Admin.Contactus');
    }

    public function send_contact(Request $request)
    {
        $response = array();

        $this->validate($request,[
            'name' => 'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'messages' => $request->input('message'),
        );

        $status = Mail::send('contact.mail', $data, function ($message) use ($data) {
            $to_email = 'kartik@stalwartitsolution.com';
            $message->to($to_email);
            $message->subject('Stalwart Contact Notification..');
        });
        
        if( $status ) {
            $response['success'] = true;
            $response['message'] = "Mail sent successfully...";
        }
        else {
            $response['success'] = false;
            $response['message'] = "Something went wrong while sending email..";
        }

        return response()->json($response);
    }
}

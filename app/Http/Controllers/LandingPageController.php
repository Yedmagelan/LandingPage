<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendMail;
use App\Models\ContactUs;
use Mail;

class LandingPageController extends Controller
{

    public function showForm(Request $request) {
        return view('Front.index');
      }
    
    
    public function storeForm(Request $request) {
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|max:10',
          'subject'=>'required',
          'message' => 'required'
       ]);
  
       ContactUs::create($request->all());

        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'subject' => $request->subject,
          'message' => $request->message
        ];

        Mail::to('richkardmagelan@gmail.com')->send(new sendMail($data));
  
    //   Mail::send('email', array(
    //       'name' => $request->get('name'),
    //       'email' => $request->get('email'),
    //       'phone' => $request->get('phone'),
    //       'subject' => $request->get('subject'),
    //       'form_message' => $request->get('message'),
    //   ), function($message) use ($request){
    //       $message->from($request->email);
    //       $message->to('richkardmagelan@gmail.com', 'Hello Admin')->subject($request->get('subject'));
    //   });
  
      return back()->with('success', 'Merci de nous avoir contacté.');
    }
}

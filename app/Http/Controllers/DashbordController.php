<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\repondreMail;
use App\Models\ContactUs;
use Mail;

class DashbordController extends Controller
{
    //

      
     // ======================== affiche tous les contacts envoyés  ======================== 
    public function ListeCont(){
      $contacts = ContactUs::orderBy('id','DESC')->get();
      return view('dashbord.page.index',compact('contacts'));
  }
  //  Afficher message par details
  public function readmail($contact_us_id){
    $contact = ContactUs::findOrFail($contact_us_id);
    return view('dashbord.page.read-email',compact('contact'));
}

  //  Repondre aux message
  public function RepondreMail($contact_us_id){
    $contact = ContactUs::findOrFail($contact_us_id);
    return view('dashbord.page.reponse',compact('contact'));
}

 // postuler  Repondre aux message
public function repondre(Request $request){
  $ContactUs = $request->id;
  $this->validate($request, [
    'name' => 'required',
    'email' => 'required|email',
    'phone' => 'required',
    'subject'=>'required',
    'message' => 'required'
 ]);

 $value = [
  'Admin' => $request->name,
  'email' => $request->email,
  'phone' => $request->phone,
  'subject' => $request->subject,
  'message' => $request->message
];

Mail::to($request->email)->send(new repondreMail($value));

}



      
}

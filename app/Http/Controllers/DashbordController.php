<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class DashbordController extends Controller
{
    //

      
     // ======================== affiche tous les contacts envoyés  ======================== 
    public function ListeCont(){
      $contacts = ContactUs::orderBy('id','DESC')->get();
      return view('dashbord.page.index',compact('contacts'));
  }
      
}

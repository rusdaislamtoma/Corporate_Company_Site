<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class FrontEndContactController extends Controller
{
    public function contact_info(){
        $data['title'] = "Contact Us";
        $data['contact'] = Contact::first();
        return view('frontend.contact.contactInfo',$data);
    }



}


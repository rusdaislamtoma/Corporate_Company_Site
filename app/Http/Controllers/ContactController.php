<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_settings(){
        $data['title'] = "Edit Contact";
        $data['contact_settings']['contact']= Contact::first();
        // dd($data);
        return view('backend.admin.contactInformation.contact_info',$data);
    }
    public function update_contact_settings(Request $request){
        $request->validate([
            'address'=>'required',
            'contactNo'=>'required',
            'email'=>'required',
            'details' => 'required'
        ]);
        $contact = Contact::first();

        $contact->address = $request->address;
        $contact->contactNo = $request->contactNo;
        $contact->email = $request->email;
        $contact->details = $request->details;
        $contact->save();

        session()->flash('success','Contact updated');
        return redirect()->back();
    }
}

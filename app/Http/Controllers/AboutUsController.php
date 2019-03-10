<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Client;
use App\Comment;
use App\CompanySetting;
use App\Contact;
use App\Expert;
use App\Service;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs(){
        $data['title'] = "About Us";
        $data['last_3_service'] = Service::orderBy('id','DESC')->limit(3)->get();
        $data['company'] = CompanySetting::first();
        $data['contact'] = Contact::first();
        $data['last_3_blog'] = Blog::orderBy('id','DESC')->limit(3)->get();
        $data['total_comment'] = Comment::count();
        $data['clients'] = Client::all();
        $data['last_4_expert'] = Expert::orderBy('id','DESC')->limit(4)->get();
        return view('frontend.aboutUs.about_us',$data);
    }

    public function team(){
        $data['title'] = "Our Teams";
        $data['experts'] = Expert::all();
        return view('frontend.aboutUs.team',$data);
    }

    public function faq(){
        $data['title'] = "Company Faq";
        return view('frontend.aboutUs.faq',$data);
    }


}

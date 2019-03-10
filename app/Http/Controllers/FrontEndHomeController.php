<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Client;
use App\Comment;
use App\CompanySetting;
use App\Contact;
use App\Project;
use App\Service;
use App\Slider;
use Illuminate\Http\Request;

class FrontEndHomeController extends Controller
{
    public function index(Request $request){
        $data['title'] = 'Home Page';
        $data['sliders'] = Slider::all();
        $data['services_last_3'] = Service::orderBy('id','DESC')->limit(3)->get();
        $data['services_last_6'] = Service::orderBy('id','DESC')->limit(6)->get();
        $data['company'] = CompanySetting::first();
        $data['total_client'] = Client::count();
        $data['total_project'] = Project::count();
        $data['all_project'] = Project::all();
        $data['clients'] = Client::all();
        $data['contact'] = Contact::first();

        $data['last_3_blog'] = Blog::orderBy('id','DESC')->limit(3)->get();
        $data['total_comment'] = Comment::count();

        return view('frontend.home.dashboard',$data);
    }

}

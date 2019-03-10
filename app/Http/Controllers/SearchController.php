<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Project;
use App\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $data['title'] = 'Search Page';
        if(isset($request->search)){
            $data['blogs'] = Blog::where('category','like','%' .$request->search. '%')->get();
            $data['total_comment'] = Comment::count();
        }
        if(isset($request->search)){
            $data['services'] = Service::where('category','like','%' .$request->search. '%')->get();
        }
        if(isset($request->search)){
            $data['projects'] = Project::where('category','like','%' .$request->search. '%')->get();
        }


        return view('frontend.search',$data);
    }
}

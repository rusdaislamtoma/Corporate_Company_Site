<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class FrontEndBlogController extends Controller
{
    public function allBlog($category=false){
        $data['title'] = "All Blog";

        if(!empty($category)){
            $data['all_blog'] = Blog::where('category',$category)->get();
        }
        else{
            $data['all_blog'] = Blog::all();
        }
        $data['total_comment'] = Comment::count();
        return view('frontend.blog.allBlog',$data);
    }
    public function details(Request $request,$slugTitle){
        $data['title'] = "Blog Details";

        $data['blog'] = Blog::where('slug_title',$slugTitle)->first();

        if(isset($request->title)){
            $data['last_5_blog'] = Blog::where('title','like','%' .$request->title. '%')->get();
        }
        else{
            $data['last_5_blog'] = Blog::orderBy('id','DESC')->limit(5)->get();
        }
        $data['all_blog'] = Blog::all();
        $data['all_blog_distinct'] = Blog::distinct()->get(['category']);

        $data['comments'] = Comment::all();
        $data['total_comment'] = Comment::count();
        return view('frontend.blog.single_blog_details',$data);
    }


}

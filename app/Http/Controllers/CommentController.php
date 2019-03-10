<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:comments',
            'message' => 'required',
        ]);
        $comment = New Comment();
        $date = new \DateTime('now');
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->website = $request->website;
        $comment->message = $request->message;
        $comment->date = $date;
       // dd($comment);
        $comment->save();
        session()->flash('success','Your Post Saved Successfully');
        return redirect()->back();

    }
}

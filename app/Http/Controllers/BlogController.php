<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Blogs';
        $blogs = new Blog();
        $blogs =  $blogs->paginate(5);
        $data['blogs'] =  $blogs;
        $data['serial'] = $this->managePagination($blogs);
        return view('backend.admin.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Add New Blog";
        return view('backend.admin.blog.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'images' => 'mimes:png,jpeg,jpg',
            'date' => 'required'
        ]);
        $blog = New Blog();

        $blog->title = $request->title;
        $slugTitle = str_slug($request->title);
        $blog->slug_title = $slugTitle;
        $blog->category = $request->category;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->date = $request->date;

        if($request->hasFile('image')){

            $image = $request->file('image');
            $image->move('blog_images', $blog->id . '.' . $image->getClientOriginalName());
            $blog->image = 'blog_images/' . $blog->id . '.' . $image->getClientOriginalName();
            $blog->save();
        }

        $blog->save();
        session()->flash('success','Blog Saved Successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "Edit Blog";
        $data['blog']= Blog::findOrFail($id);
        return view('backend.admin.blog.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'images' => 'mimes:png,jpeg,jpg',
            'date' => 'required'
        ]);
        $blog = Blog::findOrFail($id);
        $old_file = $blog->image;

        $blog->title = $request->title;
        $slugTitle = str_slug($request->title);
        $blog->slug_title = $slugTitle;
        $blog->category = $request->category;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->date = $request->date;

        if($request->hasFile('image')){
            unlink($old_file);
            $image = $request->file('image');
            $image->move('blog_images',  $blog->id . '.' . $image->getClientOriginalName());
            $blog->image = 'blog_images/' . $blog->id . '.' . $image->getClientOriginalName();
            $blog->save();

        }

        $blog->save();
        session()->flash('success','Blog Updated Successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        session()->flash('success','Blog deleted successfully');
        return redirect()->route('blog.index');
    }

    function managePagination($obj)
    {
        $serial=1;
        if($obj->currentPage()>1)
        {
            $serial=(($obj->currentPage()-1)*$obj->perPage())+1;
        }
        return $serial;
    }
}

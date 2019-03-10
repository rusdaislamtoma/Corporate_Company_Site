<?php

namespace App\Http\Controllers;

use App\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Experts';
        $experts = new Expert();
        $experts =  $experts->paginate(5);
        $data['experts'] =  $experts;
        $data['serial'] = $this->managePagination($experts);
        return view('backend.admin.expert.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Add New Expert";
        return view('backend.admin.expert.create',$data);
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
            'name' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'email' => 'required|unique:experts',
            'images' => 'mimes:png,jpeg,jpg',
        ]);
        $expert = New Expert();

        $expert->name = $request->name;
        $slugName = str_slug($request->name);
        $expert->slug_name = $slugName;
        $expert->department = $request->department;
        $expert->designation = $request->designation;
        $expert->email = $request->email;

        if($request->hasFile('image')){

            $image = $request->file('image');
            $image->move('expert_images', $expert->id . '.' . $image->getClientOriginalName());
            $expert->image = 'expert_images/' . $expert->id . '.' . $image->getClientOriginalName();
            $expert->save();
        }

        $expert->save();
        session()->flash('success','Expert Saved Successfully');
        return redirect()->route('expert.index');
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
        $data['title'] = "Edit Expert";
        $data['expert']= Expert::findOrFail($id);
        return view('backend.admin.expert.edit',$data);
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
            'name' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'email' => 'required|unique:experts,email,'.$id,
            'images' => 'mimes:png,jpeg,jpg',
        ]);
        $expert = Expert::findOrFail($id);
        $old_file = $expert->image;
        //dd($old_file);

        $expert->name = $request->name;
        $slugName = str_slug($request->name);
        $expert->slug_name = $slugName;
        $expert->department = $request->department;
        $expert->designation = $request->designation;
        $expert->email = $request->email;

        if($request->hasFile('image')){
            unlink($old_file);
            $image = $request->file('image');
            $image->move('expert_images',$expert->id . '.' . $image->getClientOriginalName());
            $expert->image = 'expert_images/' . $expert->id . '.' . $image->getClientOriginalName();
            $expert->save();

        }

        $expert->save();
        session()->flash('success','Expert Updated Successfully');
        return redirect()->route('expert.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expert::findOrFail($id)->delete();
        session()->flash('success','Expert deleted successfully');
        return redirect()->route('expert.index');
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

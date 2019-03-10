<?php

namespace App\Http\Controllers;

use App\Client;
use App\Project;
use App\ProjectImages;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Projects';
        $projects = new Project();
        $projects = $projects->with('relClient')->paginate(5);
        $data['projects'] = $projects;
        $data['serial'] = $this->managePagination($projects);
        return view('backend.admin.project.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Add New Project";
        $data['clients'] = Client::pluck('name','id');
        return view('backend.admin.project.create',$data);

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
            'client_id' => 'required',
            'category' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'images' => 'mimes:png,jpeg,jpg',
            'status' => 'required'
        ]);
        $project = New Project();

        $project->client_id = $request->client_id;
        $project->title = $request->title;
        $slugTitle = str_slug($request->title);
        $project->slug_title = $slugTitle;
        $project->category = $request->category;
        $project->short_description = $request->short_description;
        $project->description = $request->description;
        $project->status = $request->status;

        if($request->hasFile('image')){

            $image = $request->file('image');
            $image->move('project_images', $project->id . '.' . $image->getClientOriginalName());
            $project->image = 'project_images/' . $project->id . '.' . $image->getClientOriginalName();
            $project->save();
        }

        $project->save();
        session()->flash('success','Project Saved Successfully');
        return redirect()->route('project.index');
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
        $data['title'] = "Edit Project";
        $data['project']= Project::findOrFail($id);
        $data['clients'] = Client::pluck('name','id');
        return view('backend.admin.project.edit',$data);
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
            'client_id' => 'required',
            'category' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'images' => 'mimes:png,jpeg,jpg',
            'status' => 'required'
        ]);
        $project = Project::findOrFail($id);
        $old_file = $project->image;

        $project->client_id = $request->client_id;
        $project->title = $request->title;
        $slugTitle = str_slug($request->title);
        $project->slug_title = $slugTitle;
        $project->category = $request->category;
        $project->short_description = $request->short_description;
        $project->description = $request->description;
        $project->status = $request->status;

        if($request->hasFile('image')){
            unlink($old_file);
            $image = $request->file('image');
            $image->move('project_images', $project->id . '.' . $image->getClientOriginalName());
            $project->image = 'project_images/' . $project->id . '.' . $image->getClientOriginalName();
            $project->save();

        }

        $project->save();
        session()->flash('success','Project Updated Successfully');
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectImages::where('project_id',$id)->delete();
        Project::findOrFail($id)->delete();
        session()->flash('success','Project deleted successfully');
        return redirect()->route('project.index');
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

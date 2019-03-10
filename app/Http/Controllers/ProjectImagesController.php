<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImages;
use Illuminate\Http\Request;

class ProjectImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Projects';
        $projects = new ProjectImages();
        $projects = $projects->with('relProject')->paginate(5);
        $data['projectImages'] = $projects;
        $data['serial'] = $this->managePagination($projects);
        return view('backend.admin.project_images.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Add New Project Image";
        $data['projects'] = Project::pluck('title','id');
        return view('backend.admin.project_images.create',$data);
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
            'project_id' => 'required',
            'images' => 'mimes:png,jpeg,jpg',

        ]);
        $project = New ProjectImages();

        $project->project_id = $request->project_id;

        if($request->hasFile('image')){

            $image = $request->file('image');
            $image->move('project_single_images', $project->id . '.' . $image->getClientOriginalName());
            $project->image = 'project_single_images/' . $project->id . '.' . $image->getClientOriginalName();
            $project->save();
        }

        $project->save();
        session()->flash('success','Project Image Saved Successfully');
        return redirect()->route('projectImages.index');

    }


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
        $data['projectImage']= ProjectImages::findOrFail($id);
        $data['projects'] = Project::pluck('title','id');
        return view('backend.admin.project_images.edit',$data);
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
            'project_id' => 'required',
            'images' => 'mimes:png,jpeg,jpg',

        ]);
        $project = ProjectImages::findOrFail($id);
        $old_file = $project->image;

        $project->project_id = $request->project_id;

        if($request->hasFile('image')){
            unlink($old_file);

            $image = $request->file('image');
            $image->move('project_single_images', $project->id . '.' . $image->getClientOriginalName());
            $project->image = 'project_single_images/' . $project->id . '.' . $image->getClientOriginalName();
            $project->save();
        }

        $project->save();
        session()->flash('success','Project Image Updated Successfully');
        return redirect()->route('projectImages.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectImages::findOrFail($id)->delete();
        session()->flash('success','Project Image deleted successfully');
        return redirect()->route('projectImages.index');
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

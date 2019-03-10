<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImages;
use Illuminate\Http\Request;

class FrontEndProjectController extends Controller
{
    public function allProject(){
        $data['title'] = "All Project";
        $data['all_project'] = Project::all();

        return view('frontend.project.allProject',$data);
    }
    public function details($slugTitle){
        $data['title'] = "Project Details";
        $data['project'] = Project::with('relClient')->where('slug_title',$slugTitle)->first();

        $data['project_images'] = ProjectImages::where('project_id',$data['project']->id)->get();
        $data['all_project'] = Project::all();
        return view('frontend.project.single_project_details',$data);
    }


}

<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Services';
        $services= new Service();
        $services = $services->paginate(5);
        $data['services'] = $services;
        $data['serial'] = $this->managePagination($services);
        return view('backend.admin.service.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Add New Service";
        return view('backend.admin.service.create',$data);
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
            'images' => 'mimes:png,jpeg,jpg'
        ]);
        $service = New Service();

        $service->title = $request->title;
        $slugTitle = str_slug($request->title);
        $service->slug_title = $slugTitle;
        $service->category = $request->category;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        if($request->hasFile('image')){

            $image = $request->file('image');
            $image->move('service_images', $service->id . '.' . $image->getClientOriginalName());
            $service->image = 'service_images/' . $service->id . '.' . $image->getClientOriginalName();
            $service->save();
        }

        $service->save();
        session()->flash('success','Service Saved Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "Edit Service";
        $data['service']= Service::findOrFail($id);
        return view('backend.admin.service.edit',$data);
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
            'images' => 'mimes:png,jpeg,jpg'
        ]);
        $service = Service::findOrFail($id);
        $old_file =$service->image;

        $service->title = $request->title;
        $slugTitle = str_slug($request->title);
        $service->slug_title = $slugTitle;
        $service->category = $request->category;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        if($request->hasFile('image')){
            unlink($old_file);
            $image = $request->file('image');
            $image->move('service_images', $service->id . '.' . $image->getClientOriginalName());
            $service->image = 'service_images/' . $service->id . '.' . $image->getClientOriginalName();
            $service->save();
        }

        $service->save();
        session()->flash('success','Service Updated Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        session()->flash('success',' Service deleted successfully');
        return redirect()->route('service.index');
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

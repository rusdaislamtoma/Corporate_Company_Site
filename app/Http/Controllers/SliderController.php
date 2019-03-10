<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Sliders';
        $sliders= new Slider();
        $sliders = $sliders->paginate(5);
        $data['sliders'] = $sliders;
        $data['serial'] = $this->managePagination($sliders);
        return view('backend.admin.slider.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "Hello";
        $data['title'] = "Add New Slider";
        return view('backend.admin.slider.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'images' => 'mimes:png,jpeg,jpg'
        ]);
        $slider = New Slider();
        $slider->title = $request->title;
        $slider->category = $request->category;
        $slider->description = $request->description;
        if($request->hasFile('image')){

            $image = $request->file('image');
            $image->move('slider_images', $slider->id . '.' . $image->getClientOriginalName());
            $slider->image = 'slider_images/' . $slider->id . '.' . $image->getClientOriginalName();
            $slider->save();
        }

        $slider->save();
        session()->flash('success','Slider Saved Successfully');
        return redirect()->route('slider.index');
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
        $data['title'] = "Edit Slider";
        $data['slider']= Slider::findOrFail($id);
        return view('backend.admin.slider.edit',$data);
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
            'description' => 'required',
            'images' => 'mimes:png,jpeg,jpg'
        ]);
        $slider = Slider::findOrFail($id);
        $old_file = $slider->image;
        //dd($old_file);
        $slider->title = $request->title;
        $slider->category = $request->category;
        $slider->description = $request->description;
        if($request->hasFile('image')){
            unlink($old_file);
            $image = $request->file('image');
            $image->move('slider_images', $slider->id . '.' . $image->getClientOriginalName());
            $slider->image = 'slider_images/' . $slider->id . '.' . $image->getClientOriginalName();
            $slider->save();
        }

        $slider->save();
        session()->flash('success','Slider Updated Successfully');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();
        session()->flash('success','Slider deleted successfully');
        return redirect()->route('slider.index');
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

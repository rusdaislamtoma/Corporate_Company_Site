<?php

namespace App\Http\Controllers;

use App\Menu;
use App\SubMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Menus';
        $menus = new Menu();
        $menus =  $menus->paginate(5);
        $data['menus'] =  $menus;
        $data['serial'] = $this->managePagination($menus);
        return view('backend.admin.Menu.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Add New Menu";
        return view('backend.admin.Menu.create',$data);
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
        ]);
        $menu = New Menu();

        $menu->title = $request->title;
        $slugTitle = str_slug($request->title);
        $menu->slug_title = $slugTitle;


        $menu->save();
        session()->flash('success','Menu Saved Successfully');
        return redirect()->route('menu.index');

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
        $data['title'] = "Edit Menu";
        $data['menu']= Menu::findOrFail($id);
        return view('backend.admin.Menu.edit',$data);
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
        ]);
        $menu = Menu::findOrFail($id);

        $menu->title = $request->title;
        $slugTitle = str_slug($request->title);
        $menu->slug_title = $slugTitle;


        $menu->save();
        session()->flash('success','Menu Updated Successfully');
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubMenu::where('menu_id',$id)->delete();
        Menu::findOrFail($id)->delete();
        session()->flash('success','Menu deleted successfully');
        return redirect()->route('menu.index');

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

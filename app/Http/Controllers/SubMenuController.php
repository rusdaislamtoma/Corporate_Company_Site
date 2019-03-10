<?php

namespace App\Http\Controllers;

use App\Menu;
use App\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Submenus';
        $submenus = new SubMenu();
        $submenus =  $submenus->paginate(5);
        $data['submenus'] =  $submenus;
        $data['serial'] = $this->managePagination($submenus);
        return view('backend.admin.subMenu.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Add New Submenu";
        $data['menus'] = Menu::pluck('title','id');
        return view('backend.admin.subMenu.create',$data);
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
            'menu_id'=>'required'
        ]);
        $menu = New SubMenu();

        $menu->title = $request->title;
        $slugTitle = str_slug($request->title);
        $menu->slug_title = $slugTitle;
        $menu->menu_id = $request->menu_id;



        $menu->save();
        session()->flash('success','Submenu Saved Successfully');
        return redirect()->route('sub_menu.index');

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
        $data['title'] = "Edit Submenu";
        $data['sub_menu']= SubMenu::findOrFail($id);
        $data['menus'] = Menu::pluck('title','id');
        return view('backend.admin.subMenu.edit',$data);
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
            'menu_id'=>'required'
        ]);
        $menu = SubMenu::findOrFail($id);

        $menu->title = $request->title;
        $slugTitle = str_slug($request->title);
        $menu->slug_title = $slugTitle;
        $menu->menu_id = $request->menu_id;



        $menu->save();
        session()->flash('success','Submenu Updated Successfully');
        return redirect()->route('sub_menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubMenu::findOrFail($id)->delete();
        session()->flash('success','Submenu deleted successfully');
        return redirect()->route('sub_menu.index');

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

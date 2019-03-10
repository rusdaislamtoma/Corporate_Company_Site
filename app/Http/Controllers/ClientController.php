<?php

namespace App\Http\Controllers;

use App\Client;
use App\Project;
use DemeterChain\C;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Clients';
        $clients = new Client();
        $clients  = $clients ->paginate(5);
        $data['clients'] = $clients ;
        $data['serial'] = $this->managePagination($clients );
        return view('backend.admin.client.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['title'] = "Add New Client";
        return view('backend.admin.client.create',$data);
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
            'email' => 'required|unique:clients',
            'address' => 'required',
            'logo' => 'mimes:png,jpeg,jpg'
        ]);
        $client = New Client();

        $client->name = $request->name;
        $slugName = str_slug($request->name);
        $client->slug_name = $slugName;
        $client->email = $request->email;
        $client->address = $request->address;
        if($request->hasFile('logo')){

            $logo = $request->file('logo');
            $logo->move('client_logos', $client->id . '.' . $logo->getClientOriginalName());
            $client->logo = 'client_logos/' . $client->id . '.' . $logo->getClientOriginalName();
            $client->save();
        }

        $client->save();
        session()->flash('success','client Saved Successfully');
        return redirect()->route('client.index');
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
        $data['title'] = "Edit Service";
        $data['client']= Client::findOrFail($id);
        return view('backend.admin.client.edit',$data);
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
            'email' => 'required|unique:clients,email,'.$id,
            'address' => 'required',
            'logo' => 'mimes:png,jpeg,jpg'
        ]);
        $client = Client::findOrFail($id);
        $old_file = $client->logo;

        $client->name = $request->name;
        $slugName = str_slug($request->name);
        $client->slug_name = $slugName;
        $client->email = $request->email;
        $client->address = $request->address;
        if($request->hasFile('logo')){
            unlink($old_file);
            $logo = $request->file('logo');
            $logo->move('client_logos', $client->id . '.' . $logo->getClientOriginalName());
            $client->logo = 'client_logos/' . $client->id . '.' . $logo->getClientOriginalName();
            $client->save();
        }
        $client->save();
        session()->flash('success','client Updated Successfully');
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::where('client_id',$id)->delete();
        Client::findOrFail($id)->delete();
        session()->flash('success','Client deleted successfully');
        return redirect()->route('client.index');
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

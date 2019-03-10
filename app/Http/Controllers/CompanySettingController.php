<?php

namespace App\Http\Controllers;

use App\CompanySetting;
use Illuminate\Http\Request;

class CompanySettingController extends Controller
{
    public function company_settings(){
        $data['title'] = "Edit Company Settings";
        $data['company_settings']['company']= CompanySetting::first();
       // dd($data);
        return view('backend.admin.companySetting.company_setting',$data);
    }
    public function update_company_settings(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'achievement'=>'required',
            'logo' => 'mimes:png,jpeg,jpg'
        ]);
        $company_setting = CompanySetting::first();
        $old_file = $company_setting->logo;
        $company_setting->name = $request->name;
        $company_setting->description = $request->description;
        $company_setting->achievement = $request->achievement;
        $company_setting->save();

        if($request->hasFile('logo')){
            unlink($old_file);
            $image = $request->file('logo');
            $image->move('assets', $image->getClientOriginalName());
            $company_setting->logo = 'assets/' . $image->getClientOriginalName();
            $company_setting->save();

        }
        session()->flash('success','Company setting updated');
        return redirect()->back();
    }
}

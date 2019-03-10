<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class FrontEndServiceController extends Controller
{

    public function allService($category=false){
        $data['title'] = "All Service";
        if(!empty($category)){
            $data['all_service'] = Service::where('category',$category)->get();
            $data['all_service_marketing'] = [];
            $data['all_service_business'] = [];
        }
        else{
            $data['all_service'] = Service::all();
            $data['all_service_marketing'] = Service::where('category','Marketing')->get();
            $data['all_service_business'] = Service::where('category','Business')->get();
        }

        return view('frontend.service.allService',$data);
    }

    public function details($slugTitle){
        $data['title'] = "Service Details";
        $data['services'] = Service::where('slug_title',$slugTitle)->first();
        $data['all_service'] = Service::all();
        return view('frontend.service.details',$data);
    }

}

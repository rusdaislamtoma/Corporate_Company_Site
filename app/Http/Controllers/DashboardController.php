<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['title'] = 'Dashboard';
        return view('backend.admin.dashboard',$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($action,$page){
        $uri = 'adminPanel.Pages.'.$page.'.'.$action;
        $data = compact('uri');
        return view('adminPanel.Pages.dashboard.main')->with($data);
    }
}

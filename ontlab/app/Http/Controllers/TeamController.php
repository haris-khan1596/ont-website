<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;

class TeamController extends Controller
{
    public function index(){
        return view('team');
    }
    public function profile($id){
        $info=DB::table('member')->where('m_id', '=', $id)->get();
        $edu=DB::table('education')->where('m_id', '=', $id)->orderBy('start','desc')->get();
        $exp=DB::table('experiences')->where('m_id', '=', $id)->orderBy('start','desc')->get();
        $awards=DB::table('awards')->where('m_id', '=', $id)->orderBy('year','desc')->get();
        $data = compact('info', 'edu', 'exp', 'awards');
        return view('memberprofile')->with($data);
    }


}



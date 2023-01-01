<?php

namespace App\Http\Controllers;

use App\Models\Awards;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminPanel.Pages.member.add.awards');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $awards = new Awards;
        $awards->title = $request['title'];
        $awards->year = $request['year'];
        $awards->organization=$request['organization'];
        $awards->m_id = $request->session()->get('member')['id'];
        $awards->created_at = Carbon::now();
        $awards->updated_at = Carbon::now();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Awards  $awards
     * @return \Illuminate\Http\Response
     */
    public function show(Awards $awards)
    {
        echo "<pre/>";
        print_r($awards);
        die;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Awards  $awards
     * @return \Illuminate\Http\Response
     */
    public function edit(Awards $awards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Awards  $awards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Awards $awards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Awards  $awards
     * @return \Illuminate\Http\Response
     */
    public function destroy(Awards $awards)
    {
        //
    }

    public function delete(Awards $Awards)
    {
        $Awards = Awards::find($Awards);
        if (!is_null($Awards)){
            $Awards->delete();
        }
        return redirect('adminPanel/awards');
    }
}

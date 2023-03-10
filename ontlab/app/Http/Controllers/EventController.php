<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $path=$request->path();
        preg_match('!\d+!',$path,$id);
        $events = new Events();
        $events->title = $request['title'];
        $events->location = $request['location'];
        $events->timmings = $request['timmings'];
        $events->objective = $request['objective'];
        $events->description = $request['description'];
        $events->image = "storage/".$request->file('image')->store('Events');
        $events->d_id = $id[0];
        $events->created_at = Carbon::now();
        $events->updated_at = Carbon::now();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }

    public function delete($event)
    {
        $event = Event::find($event);
        if (!is_null($event)){
            $event->delete();
        }
        return redirect('adminPanel/members');
    }
}

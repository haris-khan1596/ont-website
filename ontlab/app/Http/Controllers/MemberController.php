<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isNull;

class MemberController extends Controller
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
        $url = url('/member');
        $title = "Member Registration";
        $data = compact('url', 'title');
        return view('member')->with($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Member = new Member();
        $Member->name = $request['name'];
        $Member->email = $request['email'];
        $Member->password = Hash::make($request['password']);
        $Member->desgination = $request['desgination'];
        $Member->ProfilePic = "storage/".$request->file('ProfilePic')->store('member');
        $Member->scholar = $request['scholar'];
        $Member->linkedin = $request['linkedin'];
        $Member->twitter = $request['twitter'];
        $Member->facebook = $request['facebook'];
        $Member->created_at = Carbon::now();
        $Member->updated_at = Carbon::now();
        $Member->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($member)
    {
        $member = Member::find($member);
        if(is_null($member)){
            return redirect('adminPanel/members');
        }
        else {
            $title = "Update Member";
            $url = url('/member/update').'/'.$member;
            $data = compact('customer', 'url', 'title');
            return view('members')->with($data);

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update($member, Request $request)
    {
        $member = Member::find($member);
        $member->name = $request['name'];
        $member->email = $request['email'];
        $member->desgination = $request['desgination'];
        $member->ProfilePic = "storage/".$request->file('ProfilePic')->store('member');
        $member->scholar = $request['scholar'];
        $member->linkedin = $request['linkedin'];
        $member->twitter = $request['twitter'];
        $member->facebook = $request['facebook'];
        $member->save();
        return redirect('adminPanel/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function delete($member)
    {
        $Member = Member::find($member);
        if (!is_null($Member)){
            $member->delete();
        }
        return redirect('adminPanel/members');
    }
}

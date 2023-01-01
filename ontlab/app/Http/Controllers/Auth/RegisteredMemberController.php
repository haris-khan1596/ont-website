<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredMemberController extends Controller
{
    public function create(){
        return view('adminPanel.Pages.dashboard.members');
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Member::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        $member = new Member();
        $member->name = $request->all()['name'];
        $member->email = $request->all()['email'];
        $member->password = Hash::make($request->all()['password']);
        $member->desgination = $request->all()['designation'];
        $member->img = url('storage/member/profile.png');
        $member->save();
        return redirect('ont-admin/members/show');
    }

}

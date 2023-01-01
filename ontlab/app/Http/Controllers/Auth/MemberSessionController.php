<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class MemberSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create(){
        $route = 'memberlogin';
        $data = compact('route');
        return view('adminPanel.Auth.login')->with($data);
    }
    /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $result = DB::table('member')
            ->where('email', $request->input('email'))
            ->get();
        $res = json_decode($result, true);
        if (sizeof($res) == 0) {
            $request->session()->regenerate();
            return redirect()->route('memberlogin');
        } else {
            //echo "Hello";
            $encrypted_password = $result[0]->password;
            
            if (Hash::check($request->password,$encrypted_password)) {
                //echo "You are logged in Successfully";

                //storing data in session
                $request->session()->put('member', ['username' => $result[0]->name , 'id'=> $result[0]->m_id]);
                return redirect('/member/u/'. $result[0]->m_id);
            }
            else{
                return redirect()->route('memberlogin');
            }
        }
    }
    public function destroy(Request $request){
        $request->session()->forget('member');
        return redirect('/');
    }
}

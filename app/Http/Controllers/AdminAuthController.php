<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function admin_login()
    {
        return view("admin_login");
    }

    public function admin_signup()
    {
        return view("admin_signup");
    }

    public function admin_home()
    {
        return view("admin_home");
    }

    public function admin_livescore()
    {
        return view("admin_livescore");
    }

    public function admin_highlights()
    {
        return view("admin_highlights");
    }

    public function admin_news()
    {
        return view("admin_news");
    }

    public function admin_myaccount()
    {
        return view("admin_myaccount");
    }

    public function signupAdmin(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20',
            'phone' => 'required|min:11|numeric',

        ]);

        $admins = new Admin();
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password = Hash::make($request->password);
        $admins->phone = $request->phone;
        $res = $admins->save();
        if ($res) {
            return back()->with('success', 'You have succesfully registered');
        } else {
            return back()->with('fail', 'Oops, something wrong');
        }
    }

    public function loginAdmin(Request $request)
    {

        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
        ]);

        $admins = Admin::where('email', '=', $request->email)->first();

        if ($admins) {
            if (Hash::check($request->password, $admins->password)) {
                $request->Session()->put('loginID', $admins->id);
                return redirect('admin_livescore');
            } else {
                return back()->with('fail', 'Wrong password !!');
            }
        } else {
            return back()->with('fail', 'The email is not registered');
        }
    }
}

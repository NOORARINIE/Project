<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Hash;
use Auth;
use DB;

class CustomAuthController extends Controller
{
    public function login(){
        return view ("login");
    }

    public function signup(){
        return view ("signup");
    }

    public function adminlogin(){
        return view ("adminlogin");
    }

    

    public function signupUser(Request $request){

       $request->validate([

           'name'=>'required',
           'email'=>'required|email|unique:users',
           'password'=>'required|min:6|max:20',
           'phone'=>'required|min:11|numeric',
           
       ]);

       $user = new User();
       $user -> name = $request -> name;
       $user -> email = $request -> email;
       $user -> password = Hash::make($request -> password);
       $user -> phone = $request -> phone;
       $res = $user -> save();
       if ($res) {
        return back() ->with('success', 'You have succesfully registered');
      } else {
        return back()->with('fail', 'Oops, something wrong');
    }
    }

    public function loginUser(Request $request){

        $request->validate([

        'email'=>'required|email',
        'password'=>'required|min:6|max:20',
        ]);

        $user = User::where('email','=',$request->email)->first();

        if ($user) {

            

            if (Hash::check($request->password, $user->password)){
                $request->Session()->put('loginID',$user->id);
                
                if ($user->user_type == 'Administrator'){
                    return redirect('adminhome');   
                }
                
                    return redirect('homepage');
            }
            
            
            

            
            else {
                return back()->with('fail', 'Wrong password !!');
            }
            }
            else {
                 return back()->with('fail', 'The email is not registered');
            }
            
   
        }
        
        public function viewprofile(Request $request)
           {
               
            $user = User::where('email','=',$request->email)->first();
            if($user){
                $user = User::where('loginID','=', Session::get('loginID'))->first();
                $userSession = DB::table('users')->where('loginID','=',Session::get('loginID'))->get();
            }
            return view('profile',compact('user'));
        
         }

        
        
        

        

}
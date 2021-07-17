<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Adminemployee;




class UserAuthController extends Controller
{
    function login()
    {
    	return view('auth.login');
    }

    function register()
    {
    	return view('auth.register');

        // foreach (Adminemployee::all() as $flight) {
        //     echo $flight->userName;
        // }
    }

    function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            // 'email'=>['required','email','unique:adminemployee'],
            // 'userName'=>['required','userName'],
            'password'=>['required','min:2','max:12'],

        ]);

        $adminemployee = new Adminemployee;
        $adminemployee->adminId = 1;
        $adminemployee->userName = $request->userName;
        $adminemployee->password = $request->password;
        $query = $adminemployee->save();
        if($query){
            return back()->with('success','You are succesafully registered');
        }
        else{
            return back()->with('fail','failed to add ');
        }


    }
    function check(Request $request)
    {
        // return $request->input();
        $request->validate([
            'userName' => ['required'],
            'password'=>['required','min:2','max:12'],

        ]);

        $adminemployee = Adminemployee::where('userName','=',$request->userName)->first(); 
        if($adminemployee){
            // password check..........................
            // if(Hash::check($request->password,$adminemployee->password)){
            
            if(1){
                $request->session()->put('LoggedUser',$adminemployee->adminEmployeeId);
                return redirect('profile');
               
            }
            else{
                return back()->with('fail','Invalid Password');
            }

        }
        else{
            return back()->with('fail','No account found with this email');
        }

    }

    function profile()
    {
        if(session()->has('LoggedUser')){
            $adminemployee = Adminemployee::where('adminEmployeeId','=',session('LoggedUser'))->first();

            // joining three tables ....................

            // $adminemployee = Adminemployee::join('adminemployee', 'adminemployee.adminId', '=', 'admin.adminId')
                    // ->get(['adminemployee.userName', 'admin.countryId'])
                    // ->where('adminemployee.adminEmployeeId','=',session('LoggedUser'))->first();

            $data = [

                'LoggedUserInfo' => $adminemployee
            ];
            return view('admin.profile',$data);
    }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }

    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{

    public function getLogin(){
      return view('viewAdmin.login');
    }

    public function postLogin(Request $request){
        // $login = [
        //     'username' => $req ->username,
        //     'password' => $req ->password,
        // ];
        // if(Auth::attempt($login)){
        //     return redirect()->action('PageAdminController@getDashboard');
        // }
        // else{

        //     return redirect()->back();

        $rules = [
            'username'  => 'required',
            'password'    =>  'required'
        ];
        $messages = [
            'username.required'  =>  'Please enter Username  ',
            'password.required'  =>  'Please enter Password '  
        ];
        $mahoa=bcrypt('admin');
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            $username = $request->input('username');
            $password = $request->input('password');

            if(Auth::attempt(['username'=>$username,'password'=>$password]))
            {
                return redirect()->action('PageAdminController@getDashboard');
            }
            else
            {
                //dd($mahoa);
                return redirect()->back();
            }
        }

    }
}

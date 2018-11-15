<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Validator;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function getSetting(){
        $data=User::find(Auth::id());
        $parent=User::select('id','username','avatar','password')->get()->toArray();
        return view('viewAdmin.setting',compact('data','parent'));
    }

    public function postSetting(SettingRequest $req){
        $admin=User::find(Auth::id());
        $admin->username=$req->get('username');
        $admin->avatar=$req->get('avatar');
        $admin->password=$req->get('password');
        $admin->save();
        return redirect()->action('SettingController@getSetting')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete update Admin']);

    }
}

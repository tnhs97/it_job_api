<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Validator;

class LogoutController extends Controller
{

    public function getLogout(){
      Auth::logout();
      return view('viewAdmin.login');
    }


}

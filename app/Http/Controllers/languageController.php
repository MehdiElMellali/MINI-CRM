<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App;
use Lang;

class languageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        if($request->ajax())
        {
          //  Session::set('locale', $request->locale);
         $request->session()->put('locale',$request->locale);
        // $request->session()->flash('alert-success',('app.locale_Change_success'));
        }
    }
}

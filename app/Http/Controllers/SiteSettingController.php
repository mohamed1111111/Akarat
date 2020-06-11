<?php

namespace App\Http\Controllers;
use App\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Requests;


use Illuminate\Support\Facades\Redirect;
class SiteSettingController extends Controller
{
    public function index(){
      $SiteSetting=SiteSetting::all();
      return view('admin.sitesetting.index',compact('SiteSetting'));
    }
    public function store(Request $request){
       // return response()->json($request, 200);
       // dd($request->all());

// $request->merge(['osama'=>'yasser'])

      foreach($request->except(['_token','submit']) as $key => $value ) {

        // "Facebook" => "h"
        if ( is_null($value)){
          // code...

        }
          else {
            SiteSetting::where('namesetting' , $key)->update(['value'=>$value]);
          }


      }
      return Redirect::back()->withFlashMessage('Done');

    }
}

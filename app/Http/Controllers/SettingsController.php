<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function addSettings(Request $request){

        $settings=new Settings();
        $settings->homestyle=$request->homestyle;
        $settings->about_txt=$request->about_txt;
        $settings->img=$request->img;
        $settings->site=$request->site;
        $settings->email=$request->email;
        $settings->phone=$request->phone;
        $settings->facebook=$request->facebook;
        $settings->twitter=$request->twitter;
        $settings->instagram=$request->instagram;
        $settings->youtube=$request->youtube;
        $settings->whatsapp=$request->whatsapp;
        $settings->activated_id=$request->activated_id;
        $settings->updated_by=$request->updated_by;
        $settings->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteSettings(Settings $settings){

        $settings->is_delete=1;
        $settings->deleted_by;
        $settings->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

}

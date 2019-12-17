<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function addAds(Request $request){

        $ads=new Ads();
        $ads->name=$request->name;
        $ads->img=$request->img;
        $ads->link=$request->link;
        $ads->activated_id=$request->activated_id;
        $ads->place_id=$request->place_id;
        $ads->created_by=$request->created_by;
        $ads->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateAds(Request $request,Ads $ads){
        $ads->name=$request->name;
        $ads->img=$request->img;
        $ads->link=$request->link;
        $ads->activated_id=$request->activated_id;
        $ads->place_id=$request->place_id;
        $ads->updated_by=$request->updated_by;
        $ads->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteAds(Ads $ads){

        $ads->is_delete=1;
        $ads->deleted_by;
        $ads->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

}

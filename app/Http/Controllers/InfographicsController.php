<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfographicsController extends Controller
{
    public function addInfographic(Request $request){

        $infographic=new Infographic();
        $infographic->name=$request->name;
        $infographic->img=$request->img;
        $infographic->activated_id=$request->activated_id;
        $infographic->created_by=$request->created_by;
        $infographic->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateInfographic(Request $request,Infographic $infographic){
        $infographic->name=$request->name;
        $infographic->img=$request->img;
        $infographic->activated_id=$request->activated_id;
        $infographic->updated_by=$request->updated_by;
        $infographic->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteInfographic(Infographic $infographic){

        $infographic->is_delete=1;
        $infographic->deleted_by;
        $infographic->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}

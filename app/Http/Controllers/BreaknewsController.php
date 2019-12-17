<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreaknewsController extends Controller
{
    public function addBreaknews(Request $request){

        $breaknews=new Breaknews();
        $breaknews->title=$request->title;
        $breaknews->activated_id=$request->activated_id;
        $breaknews->created_by=$request->created_by;
        $breaknews->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateBreaknews(Request $request,Breaknews $breaknews){
        $breaknews->title=$request->title;
        $breaknews->activated_id=$request->activated_id;
        $breaknews->updated_by=$request->updated_by;
        $breaknews->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteBreaknews(Breaknews $breaknews){

        $breaknews->is_delete=1;
        $breaknews->deleted_by;
        $breaknews->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function addVideos(Request $request){

        $videos=new Videos();
        $videos->title=$request->title;
        $videos->link_youtube=$request->link_youtube;
        $videos->local_video=$request->local_video;
        $videos->imghome=$request->imghome;
        $videos->activated_id=$request->activated_id;
        $videos->created_by=$request->created_by;
        $videos->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateVideos(Request $request,Videos $videos){
        $videos->title=$request->title;
        $videos->link_youtube=$request->link_youtube;
        $videos->local_video=$request->local_video;
        $videos->imghome=$request->imghome;
        $videos->activated_id=$request->activated_id;
        $videos->updated_by=$request->updated_by;
        $videos->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteVideos(Videos $videos){

        $videos->is_delete=1;
        $videos->deleted_by;
        $videos->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function addAlbum(Request $request){

        $album=new Album();
        $album->name=$request->name;
        $album->title=$request->title;
        $album->img=$request->img;
        $album->description=$request->description;
        $album->activated_id=$request->activated_id;
        $album->created_by=$request->created_by;
        $album->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateAlbum(Request $request,Album $album){
        $album->name=$request->name;
        $album->title=$request->title;
        $album->img=$request->img;
        $album->description=$request->description;
        $album->activated_id=$request->activated_id;
        $album->updated_by=$request->updated_by;
        $album->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteAlbum(Album $album){

        $album->is_delete=1;
        $album->deleted_by;
        $album->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function addAuthor(Request $request){

        $author=new Author();
        $author->name=$request->name;
        $author->img=$request->img;
        $author->activated_id=$request->activated_id;
        $author->created_by=$request->created_by;
        $author->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateAuthor(Request $request,Author $author){
        $author->name=$request->name;
        $author->img=$request->img;
        $author->activated_id=$request->activated_id;
        $author->updated_by=$request->updated_by;
        $author->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteAuthor(Author $author){

        $author->is_delete=1;
        $author->deleted_by;
        $author->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}

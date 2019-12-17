<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewspapersController extends Controller
{
    public function addNews_paper(Request $request){

        $news_paper=new News_paper();
        $news_paper->num=$request->num;
        $news_paper->activated_id=$request->activated_id;
        $news_paper->created_by=$request->created_by;
        $news_paper->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateNews_paper(Request $request,News_paper $news_paper){
        $news_paper->num=$request->num;
        $news_paper->activated_id=$request->activated_id;
        $news_paper->updated_by=$request->updated_by;
        $news_paper->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteNews_paper(News_paper $news_paper){

        $news_paper->is_delete=1;
        $news_paper->deleted_by;
        $news_paper->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}

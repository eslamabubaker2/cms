<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewstickersController extends Controller
{
    public function addNews_ticker(Request $request){

        $news_ticker=new News_ticker();
        $news_ticker->title=$request->title;
        $news_ticker->activated_id=$request->activated_id;
        $news_ticker->created_by=$request->created_by;
        $news_ticker->save();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function updateNews_ticker(Request $request,News_ticker $news_ticker){
        $news_ticker->title=$request->title;
        $news_ticker->activated_id=$request->activated_id;
        $news_ticker->updated_by=$request->updated_by;
        $news_ticker->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }

    public function deleteNews_ticker(News_ticker $news_ticker){

        $news_ticker->is_delete=1;
        $news_ticker->deleted_by;
        $news_ticker->update();

        return redirect()->back()->with(['msg', 'The Message']);

    }
}

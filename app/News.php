<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

//    public function getDetails(){
//        $details=News::findOrFail($this->id)->get();
//        return $details;
//    }


    /**
     * @return array
     */
    public function getImages(){
        $imgs=News_img::where('news_id',$this->id)->get();
        return $imgs;
    }

    public function getVideos()
    {
        $videos=News_video::where('news_id',$this->id)->first();
        return $videos;
    }

    /**
     * @return array
     */
    public function getCategory()
    {
        $category=Category::find($this->category_id);
        return $category;
    }

    public function getTags()
    {
        $tags=Tag_news::where('news_id',$this->id)->get();
        return $tags;
    }

}

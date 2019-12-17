<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\News;
use App\News_img;
use App\News_video;
use App\Tag_news;
use App\Tags;
use App\Upload_files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;
use Image;
use File;
use Input;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.

      // $news=News::findOrFail($id);
      // dd($id->getImages());

     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tableNews()
    {

        $title='قائمة الأخبار';
        $News=News::orderBy('id','desc')->where('is_delete','0')->get();
        return view('cpanel.news',compact('title','News'));
    }
    public function addNewsView()
    {

        $title='إضافة خبر';
        $categories=Category::all();
        $tags=Tags::all();
        $authors=Author::where('is_delete',0)->get();
        return view('cpanel.addnews',compact('title','categories','tags','authors'));
    }
    public function updateNewsView(News $news)
    {
        $title='تعديل خبر';
        $categories=Category::all();
        $tags=Tags::all();
        $tag_news=$news->getTags();
        $authors=Author::where('is_delete',0)->get();
        $videos=$news->getVideos();
        $images=$news->getImages();

        return view('cpanel.updatenews',compact('news','title','categories','tags','tag_news','authors','videos','images'));
    }
    public function archive(Request $request)
    {
        $start=$request->offset;
        $end=$request->txt;
        $archive=Upload_files::skip($start)->take(18)->get();
        echo json_encode($archive);

    }
    public function viewNewsDetails(News $id){

            echo $id->getCategory()->name;
            echo $id->caption;
            echo $id->title;
            echo $id->img;
            echo $id->text;
            echo $id->view_count;

        foreach ($id->getImages() as $img){
            echo $img->name;
        }

        foreach ($id->getVideos() as $video){
            echo $video->youtube_link;
            echo $video->fb_link;
            echo $video->local_video;
        }

        foreach ($id->getTags() as $tags){
            echo $tags->getName();
        }
    }


    public function addNews(Request $request)
    {

        File::makeDirectory(public_path().'/uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') ,0777,true);
        File::makeDirectory(public_path().'/uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d').'/withoutwatermark' ,0777,true);
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required'
        ], [
            'title.required' => 'الرجاء إدخال عنوان',
            'text.required' => 'الرجاء إدخال نص'
        ]);
        $news = new News();
        $news->title = $request->title;
        $news->caption = $request->caption;
        $news->category_id = $request->category_id;
        $news->breif = $request->breif;

if($request->category_id!=22) {
    $request->validate([
        'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        'img_archive' => 'required_without:img'
    ],[
        'img_archive.required' => 'image required'
    ]);
}else {
    $request->validate([
        'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        'author_id' => 'numeric|min:1'
    ]);
}
        /* Start upload img */
        if (isset($request->img)) {

            if (isset($request->water_img)) {
                $news_img = time() . '.' . $request->img->extension();
                $path_img = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/withoutwatermark';
                $img = Image::make($request->img->getRealPath());
                $request->img->move(public_path($path_img), $news_img);
                $img->insert(public_path('watermark/logo.png'), 'center');
                $img->save(public_path('uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d').'/'.$news_img) ) ;
                $news->img = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
            }else{

                $news_img = time() . '.' . $request->img->extension();
                $img = Image::make($request->img->getRealPath());
                $img->save(public_path('uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d').'/'.$news_img) ) ;
                $news->img = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
            }
        }
        /* End upload img */

        else if(isset($request->img_archive)){
            $news->img = $request->img_archive;
            if (isset($request->water_img)) {
                $img = Image::make($request->img_archive);
                $extension = pathinfo(public_path($request->img_archive), PATHINFO_EXTENSION);
                $news_img = time() . '.' . $extension;
                /* insert watermark at bottom-right corner with 10px offset */
                $img->insert(public_path('watermark/logo.png'), 'center');
                $img->save(public_path('uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d').'/'.$news_img) ) ;
                $news->img = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
            }
        }else if($news->category_id==22){
            $author=Author::findorfail($request->author_id);
            $news->img=$author->img;
        }

        /* Start archive img upload */
        if (isset($request->desc_img)){
            $archive=new Upload_files();
            $archive->name = $request->desc_img;
            $archive->path = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
            $archive->created_by = auth::user()->id;
            $archive->save();
        }
        /* End archive img upload */




        $news->text = $request->text;
        if (isset($request->activated_id))
            $news->activated_id = $request->activated_id;
        if (isset($request->news_ticker_id))
            $news->news_ticker_id = $request->news_ticker_id;
        if (isset($request->show_home_id))
            $news->show_home_id = $request->show_home_id;
        if (isset($request->pin_home))
            $news->pin_home = $request->pin_home;
        if (isset($request->special))
            $news->special = $request->special;
        if (isset($request->more_news))
            $news->more_news = $request->more_news;
        if ($request->author_id == -1)
            $news->author_id = NULL;
        else
            $news->author_id = $request->author_id;
        $news->created_by = auth::user()->id;

        $news->save();


        if(isset($request->news_imgs)){
            $i=0;
            foreach ($request->news_imgs as $img) {
                $news_image=new News_img();
                $path_img = public_path('uploads/news/images/') . date('Y') . '/' . date('m') . '/' . date('d');
                $news_img = time().($i++) . '.' . $img->extension();
                $img->move($path_img, $news_img);
                $news_image->name = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
                $news_image->news_id=$news->id;
                $news_image->save();
            }
        }
        if(isset($request->tags)){
            foreach ($request->tags as $tag) {
                if(is_numeric($tag)){
                    $news_tag=new Tag_news();
                    $news_tag->news_id=$news->id;
                    $news_tag->tag_id=$tag;
                    $news_tag->save();
                }else{
                    $new_tag=new Tags();
                    $new_tag->name=$tag;
                    $new_tag->created_by=auth()->user()->id;
                    $new_tag->save();

                    $news_tag=new Tag_news();
                    $news_tag->news_id=$news->id;
                    $news_tag->tag_id=$new_tag->id;
                    $news_tag->save();
                }
            }
        }
        if(isset($request->youtube_link) || isset($request->fb_link) || isset($request->local_video)) {
            $videos = new News_video();
            $videos->news_id = $news->id;
            $videos->youtube_link = $request->youtube_link;
            $videos->fb_link = $request->fb_link;

            /* Start upload video */
            if (isset($request->local_video)) {
                $path_video = public_path('uploads/news/videos/') . date('Y') . '/' . date('m') . '/' . date('d');
                $news_video = time() . '.' . $request->local_video->extension();
                $request->local_video->move($path_video, $news_video);
                $videos->local_video = 'uploads/news/videos/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_video;
            }
            /* End upload video */
            $videos->save();
        }

        return redirect()->back()->with('success','تمت العملية بنجاح');

    }


    public function updateNews(Request $request,News $news){

        $this->validate($request, [
            'title' => 'required',
            'text' => 'required'
        ], [
            'title.required' => 'العنوان مطلوب',
            'text.required' => 'النص مطلوب'
        ]);
        $news->title=$request->title;
        $news->caption=$request->caption;
        $news->category_id=$request->category_id;
        $news->breif=$request->breif;
        $news->text=$request->text;

        /* Start upload img */
        if (isset($request->img)) {

            if (isset($request->water_img)) {
                $news_img = time() . '.' . $request->img->extension();
                $path_img = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/withoutwatermark';
                $img = Image::make($request->img->getRealPath());
                $request->img->move(public_path($path_img), $news_img);
                $img->insert(public_path('watermark/logo.png'), 'center');
                $img->save(public_path('uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d').'/'.$news_img) ) ;
                $news->img = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
            }else{

                $news_img = time() . '.' . $request->img->extension();
                $img = Image::make($request->img->getRealPath());
                $img->save(public_path('uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d').'/'.$news_img) ) ;
                $news->img = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
            }
        }
        /* End upload img */

        else if(isset($request->img_archive)){
            $news->img = $request->img_archive;
            if (isset($request->water_img)) {
                $img = Image::make($request->img_archive);
                $extension = pathinfo(public_path($request->img_archive), PATHINFO_EXTENSION);
                $news_img = time() . '.' . $extension;
                /* insert watermark at bottom-right corner with 10px offset */
                $img->insert(public_path('watermark/logo.png'), 'center');
                $img->save(public_path('uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d').'/'.$news_img) ) ;
                $news->img = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
            }
        }else if($news->category_id==22){
            $author=Author::findorfail($request->author_id);
            $news->img=$author->img;
        }

        /* Start archive img upload */
        if (isset($request->desc_img)){
            $archive=new Upload_files();
            $archive->name = $request->desc_img;
            $archive->path = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
            $archive->created_by = auth::user()->id;
            $archive->save();
        }
        /* End archive img upload */

        if (isset($request->activated_id))
            $news->activated_id = $request->activated_id;
        else
            $news->activated_id =0;
        if (isset($request->news_ticker_id))
            $news->news_ticker_id = $request->news_ticker_id;
        else
            $news->news_ticker_id =0;
        if (isset($request->show_home_id))
            $news->show_home_id = $request->show_home_id;
        else
            $news->show_home_id =0;
        if (isset($request->pin_home))
            $news->pin_home = $request->pin_home;
        else
            $news->pin_home =0;
        if (isset($request->special))
            $news->special = $request->special;
        else
            $news->special =0;
        if (isset($request->more_news))
            $news->more_news = $request->more_news;
        else
            $news->more_news =0;
        if ($request->author_id == -1)
            $news->author_id = NULL;
        else
            $news->author_id = $request->author_id;
        $news->updated_by=auth::user()->id;
        $news->update();

        // update news images
        if(isset($request->news_imgs)){
            $i=0;
            foreach ($request->news_imgs as $img) {
                $news_image=new News_img();
                $path_img = public_path('uploads/news/images/') . date('Y') . '/' . date('m') . '/' . date('d');
                $news_img = time().($i++) . '.' . $img->extension();
                $img->move($path_img, $news_img);
                $news_image->name = 'uploads/news/images/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_img;
                $news_image->news_id=$news->id;
                $news_image->save();
            }
        }

        // update news tags
        if(isset($request->tags)){

            foreach ($request->tags as $tag) {
                if(is_numeric($tag)){
                    $news_tag=new Tag_news();
                    $news_tag->news_id=$news->id;
                    $news_tag->tag_id=$tag;
                    $news_tag->update();
                }else{
                    $new_tag=new Tags();
                    $new_tag->name=$tag;
                    $new_tag->created_by=auth()->user()->id;
                    $new_tag->save();

                    $news_tag=new Tag_news();
                    $news_tag->news_id=$news->id;
                    $news_tag->tag_id=$new_tag->id;
                    $news_tag->save();
                }
            }
        }

        // update news videos
        $videos=$news->getVideos();
        if ($videos==null)
            $videos=new News_video();
        $videos->youtube_link = $request->youtube_link;
        $videos->fb_link = $request->fb_link;
        if ( $videos->news_id==0) {
            $videos->news_id = $news->id;
            $videos->save();
        }
        else if(isset($request->youtube_link)||isset($request->fb_link)||isset($request->local_video)||isset($videos->local_video))
            $videos->update();
        else
            $videos->delete();
        /* Start upload video */
        if(isset($request->local_video)) {
            if (isset($request->local_video)) {
                $path_video = public_path('uploads/news/videos/') . date('Y') . '/' . date('m') . '/' . date('d');
                $news_video = time() . '.' . $request->local_video->extension();
                $request->local_video->move($path_video, $news_video);
                $videos->local_video = 'uploads/news/videos/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $news_video;
            }
            $videos->update();
        }
        /* End upload video */

        return redirect('cpanel/news')->with('success','تمت العملية بنجاح');

    }

    public function deleteNews(Request $request){

        $id = $request->deptid;
        $news=News::findorfail($id);
        $news->is_delete=1;
        $news->deleted_by=auth::user()->id;
        $news->update();

        return redirect()->back()->with('success','تمت العملية بنجاح');

    }
    public function deleteImage(Request $request){
        $album = News_img::find($request->img);
        if($album->delete())
            return response()->json(true);
        else
            return response()->json(false);
    }

    public function deleteVideo(Request $request){
        $video = News_video::find($request->video);
        $video->local_video=null;
        if(isset($video->youtube_link)||isset($video->fb_link)||isset($request->youtube_link)||isset($request->fb_link)||isset($request->local_video))
        $video->update();
        else
            $video->delete();
        return response()->json(true);
    }
}

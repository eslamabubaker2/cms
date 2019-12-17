@extends('cpanel.app')
@section('content')
    <style>
        .imgRemove, .videoRemove{
            height: 35px;
            position: absolute;
            top: -12px;
            right: 4px;
            cursor: pointer;
        }
    </style>
    <div class="robust-content content container-fluid" xmlns="">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('cpanel/home')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{asset('cpanel/news')}}">الأخبار</a>
                        </li>
                        <li class="breadcrumb-item active">تعديل خبر
                        </li>
                    </ol>
                </div>

                <div class="content-header-lead col-xs-12 mt-1">

                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">&nbsp;
                            <i class="icon-checkmark"></i> {{ session('success') }}

                        </div>
                    @endif

                    @if ($errors->all())
                        <div class="contact_form alert alert-danger" role="alert">
                            <i class="icon-close"></i> فشلت العملية
                        </div>
                    @endif



                </div>
            </div>
            <div class="content-body">
                <!-- Responsive integration table -->
                <section id="responsive" class="input-validation checkbox-validation">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="icon-tag"></i> تعديل خبر </h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="card-body collapse in">
                                    <div class="card-block card-dashboard">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="baseOnlyIcon-tab11" data-toggle="tab" href="#tabOnlyIcon11" aria-controls="tabOnlyIcon11" aria-expanded="true"><i class="icon-text-color"></i> الخبر </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="baseOnlyIcon-tab12" data-toggle="tab" aria-controls="tabOnlyIcon12" href="#tabOnlyIcon12" aria-expanded="false"><i class="icon-picture-o"></i> الصور</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="baseOnlyIcon-tab13" data-toggle="tab" aria-controls="tabOnlyIcon13" href="#tabOnlyIcon13" aria-expanded="false"><i class="icon-video"></i> الفيديو</a>
                                                    </li>

                                                </ul></div></div>
                                        <form class="form" novalidate="" action="{{url('/cpanel/updatenews').'/'.$news->id}}" method="post" onsubmit="return validateForm()" enctype="multipart/form-data"/>
                                        @csrf
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane fade in active" id="tabOnlyIcon11" aria-expanded="false" aria-labelledby="baseOnlyIcon-tab11">
                                                <br>

                                                <div class="form-body">

                                                    <div class="row">
                                                        <label class="col-md-2 text-xs-right"> العنوان الرئيسي:</label>
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <input type="text" id="issueinput1" class="form-control"  value="{{$news->title }} " required="" data-validation-required-message=" العنــوان الرئيسي" placeholder="عنوان رئيسي" name="title" data-toggle="tooltip" data-trigger="hover"  data-title="العنوان الرئيسي" />
                                                                </div></div>
                                                        </div>
                                                        @if ($errors->has('title'))
                                                            {{$errors->first('title')}}
                                                        @endif
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-2 text-xs-right"> العنوان الاشاري:</label>
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <input type="text" id="issueinput2" class="form-control" @if(isset($news->caption)) value="{{$news->caption }} " @endif   placeholder="العنوان الاشاري" name="caption" data-toggle="tooltip" data-trigger="hover"  data-title="العنوان الاشاري" />
                                                                </div></div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <label class="col-md-2 text-xs-right" >مقتطف :</label>
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <input type="text" id="issueinput3" class="form-control" name="breif" @if(isset($news->breif)) value="{{$news->breif }} " @endif placeholder="مقتطف" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="مقتطف"/>
                                                            </div></div>
                                                    </div>

                                                    <div class="row">
                                                        <label class="col-md-2 text-xs-right" >نص الخبر:</label>
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <textarea required id="issueinput4" rows="10" class="form-control" name="text"  placeholder="نص الموضوع" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="نص الموضوع" >{{$news->text }} </textarea>
                                                                </div></div></div>

                                                    </div>
                                                    @if ($errors->has('text'))
                                                        {{$errors->first('text')}}
                                                    @endif



                                                    <div class="row">
                                                        <label class="col-md-2 text-xs-right">القسم:</label>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <select id="issueinput5" name="category_id" required="" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="الأقسام">
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{$category->id }}" @if($news->category_id==$category->id) {{'selected'}} @endif {{ (collect(old('category_id'))->contains($category->id)) ? 'selected':'' }}>{{$category->name }} </option>
                                                                    @endforeach
                                                                </select>




                                                            </div></div>
                                                        <!--</div>-->
                                                        <div class="col-md-2 col-sm-2 ">
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="1" name="activated_id" @if($news->activated_id==1) checked @endif @if((old('activated_id'))) checked @endif id="input-170" />
                                                                    <label for="input-170">تفعيل</label>
                                                                </div>
                                                            </div></div>
                                                        <div class="col-md-2 col-sm-2 ">
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="1" name="more_news" @if($news->more_news==1) checked @endif @if((old('more_news'))) checked @endif id="input-17" />
                                                                    <label for="input-17">المزيد من الأخبار</label>
                                                                </div>
                                                            </div></div>
                                                        <div class="col-md-2 col-sm-2 ">
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" name="show_home_id" value="1" @if($news->show_home_id==1) checked @endif @if((old('show_home_id'))) checked @endif id="input-15"  />
                                                                    <label for="input-15">خبر رئيسي</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 ">
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" name="pin_home" value="1" @if($news->pin_home==1) checked @endif @if((old('pin_home'))) checked @endif id="input-18"  />
                                                                    <label for="input-18">تثبيت الخبر</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 ">
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="1" name="news_ticker_id" @if($news->news_ticker_id==1) checked @endif @if((old('news_ticker_id'))) checked @endif id="input-16"  />
                                                                    <label for="input-16">شريط الأخبار</label>
                                                                </div>
                                                            </div></div>
                                                        <div class="col-md-2 col-sm-2 ">
                                                            <div class="controls">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="1" name="special" @if($news->special==1) checked @endif @if((old('special'))) checked @endif id="input-19"  />
                                                                    <label for="input-16">موضوع مميز</label>
                                                                </div>
                                                            </div></div>

                                                    </div>

                                                    <div class="row" id="upload-img">
                                                        <label class="col-md-2 text-xs-right" >اضافة صورة:</label>
                                                        <div class="col-md-3">
                                                            <div class="form-group" style="margin-bottom: 10px">
                                                                <div class="controls">
                                                                    <input type="file" onchange="openFile(event)" accept="image/x-png,image/gif,image/jpeg" name="img" id="filesToUpload"  class="img_found form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                                                                </div></div>
                                                            <div class="form-group">
                                                                <div class="controls" id="desc_img" style="display: none">
                                                                    <input style="border-radius: 5px; width: 80%" type="text" id="issueinput111" class="form-control" placeholder="أضف وصف للصورة" name="desc_img"  data-toggle="tooltip" data-trigger="hover"  data-title="وصف للصورة" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            $(function() {
                                                                $('.img_found').change(function(){
                                                                    if ($(this).val() != '') {
                                                                        $('#desc_img').show();
                                                                    } else {
                                                                        $('#desc_img').hide();

                                                                    }
                                                                });
                                                            });
                                                        </script>

                                                        <script>

                                                            var openFile = function(file) {
                                                                var input = file.target;

                                                                var reader = new FileReader();
                                                                reader.onload = function(){
                                                                    var dataURL = reader.result;
                                                                    var output = document.getElementById('image-select');
                                                                    output.src = dataURL;
                                                                };
                                                                reader.readAsDataURL(input.files[0]);
                                                            };
                                                        </script>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <input type="text" id="im_ar" readonly="readonly" style="height: 37px" class="form-control" placeholder="إختيار من الأرشيف" value="{{ old('img_archive') }}" name="img_archive" aria-describedby="button-addon6">
                                                                <span class="input-group-btn" id="button-addon6">
                                          <button onclick="openModal()" class="btn bg-blue-grey white "  style="height: 37px" type="button"><i class="icon-plus"></i></button>
                                          </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">

                                                            <div style=" height: 100px; width: 130px; overflow: hidden; left: 110px; ">
                                                                <img src="{{asset('admin-assets/images/elements/img-holder.png')}}" height="100px"  id="image-select" alt=" ">
                                                            </div>
                                                            <div class="controls" style="position: absolute;margin-top: 15px">
                                                                <div class="skin skin-square">
                                                                    <input type="checkbox" value="1" name="water_img" id="input-25"  />
                                                                    <label style="font-size: 12px" for="input-25">استخدام علامة مائية</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row" id="warning" >
                                                        <label class="col-md-2 text-xs-right">الكاتب :</label>
                                                        <div class="col-md-7">
                                                            <div class=" form-group ">
                                                                <div class="controls">
                                                                    <select  name="author_id" required="" class=" select2 select2-rtl  form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="الكتاب">
                                                                        <option value="-1">اختر كاتب</option>

                                                                        @foreach ($authors as $author)
                                                                            <option value="{{$author->id }}" @if($news->author_id==$author->id) {{'selected'}} @endif {{ (collect(old('author_id'))->contains($author->id)) ? 'selected':'' }}>{{$author->name }} </option>
                                                                        @endforeach



                                                                    </select>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                        <label class="col-md-2 text-xs-right" >اضافة هاشتاق:</label>
                                                        <div class="col-md-7">
                                                            <select name="tags[]" class="select2-tags form-control" dir="rtl" multiple="" id="select2-tags">
                                                                    @foreach ($tags as $tag)
                                                                    <option value="{{$tag->id }} "
                                                                       @foreach ($tag_news as $tag_new)
                                                                            @if($tag->id==$tag_new->tag_id)
                                                                            selected
                                                                            @endif
                                                                       @endforeach
                                                                    >{{$tag->name }}</option>

                                                                    @endforeach

                                                            </select>
                                                        </div>

                                                    </div>


                                                </div>


                                                <!---->


                                            </div>

                                            <div class="tab-pane fade" id="tabOnlyIcon12" aria-labelledby="baseOnlyIcon-tab12" aria-expanded="false">
                                                <br>

                                                <div class="row">
                                                    <label class="col-md-2 text-xs-right" >اضافة صور أسفل الخبر:</label>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <input type="file" accept="image/x-png,image/gif,image/jpeg"  name="news_imgs[]"  multiple   class="form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                                                            </div></div>
                                                    </div>

                                                </div>
                                                <div class="card-body collapse in">
                                                    <div class="card-block">
                                                        <div class="card-text">
                                                            <p>صور الخبر /</p>

                                                        </div>
                                                    </div>
                                                    <div class="card-block  my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
                                                        <div class="row">
                                                            @foreach($images as $img)
                                                            <div class="col-lg-3 col-md-6 col-xs-12" style="margin-bottom: 20px;" >
                                                                <a href="{{asset('')}}{{$img->name }}"  data-size="480x360">
                                                                    <img class="img-thumbnail img-fluid" src="{{asset('')}}thumb.php?src={{$img->name }}&size=300x170" itemprop="thumbnail" alt="Image description" />
                                                                    <img class="imgRemove" onclick="deleteimg('{{$img->id }}',$(this).parent().parent())" src="{{asset('admin-assets/images/icons/Delete.ico')}}"/>
                                                                </a>

                                                            </div>
                                                            @endforeach

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="tab-pane fade " id="tabOnlyIcon13" aria-labelledby="baseOnlyIcon-tab23" aria-expanded="true">
                                                <br>

                                                <div class="row form-body" id="link">
                                                    <div class="row">
                                                        <label class="col-md-2 text-xs-right">فيديو من اليوتيوب : </label>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <input type="text" name="youtube_link" @if(isset($videos->youtube_link)) value="{{$videos->youtube_link }}  " @endif  class="form-control" placeholder=" أدخل رابط الفيديو من اليوتيوب"  />
                                                                </div>
                                                            </div></div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-2 text-xs-right">فيديو من الفيس بوك:</label>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <input type="text" name="fb_link" @if(isset($videos->fb_link))  value="{{$videos->fb_link }} " @endif class="form-control" placeholder=" أدخل رابط الفيديو من الفيس بوك"  />
                                                                </div>
                                                            </div></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2 text-xs-right">
                                                            <label> أو رفع فيديو من الجهاز :</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <input type="file"  accept="video/*" name="local_video" id="filesToUpload" class="form-control video_file"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>
                                                                </div></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label for="" style="color: red" class="col-md-4 text-xs-right">الحــد الأقصــى المسمــوح به 150 ميجـا بايت</label>
                                                    </div>
                                                    <div class="card-block  my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
                                                        <div class="row">
                                                                @if(isset($videos->local_video))
                                                            <div class="col-lg-3 col-md-6 col-xs-12" style="margin-bottom: 20px;" >
                                                                <video class="img-thumbnail img-fluid" style="height: 200px" width="300" height="200" controls>
                                                                    <source src="{{asset('')}}{{$videos->local_video}}" type="video/mp4">
                                                                </video>
                                                                <img class="videoRemove" onclick="deletevideo('{{$videos->id }}',$(this).parent())" src="{{asset('admin-assets/images/icons/Delete.ico')}}" id="{{$videos->id}}"/>
                                                            </div>
                                                                @endif

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-actions">
                                                <div class="text-xs-right">
                                                    <button type="submit" value = "upload" name="fileSubmit" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>
                                                    <!--                          <button type="submit" class="btn btn-info"> معاينة <i class="fa fa-eye position-right"></i></button>-->
                                                    <button type="reset" class="btn btn-danger"> مسح الحقول <i class="icon-refresh position-right"></i></button>
                                                </div>
                                            </div>


                                        </div>
                                        </form>
                                        <!--</form>-->
                                        <div class="modal  fade text-xs-left" id="custom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel13" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" style="max-width: 1050px" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-blue-grey white">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel13">أرشيف الصور</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form action="#" >
                                                                <div class="has-feedback has-feedback-left col-md-6 " style="margin: 15px 0 10px 0">
                                                                    <input type="search" id="search-contacts" style="height: 33px;" class="form-control" placeholder="أدخل كلمة البحث ...">
                                                                    <div class="form-control-position">
                                                                        <button class="btn bg-blue-grey white" id="search-btn">
                                                                            بحث


                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">



                                                        <div class="row" id="img_location">

                                                        </div>
                                                        <div id="image">
                                                            <div class="loader"></div>
                                                        </div>
                                                        <div id="error_msg" style="display: none;text-align: center;line-height: 400px;">
                                                            <img class="img-responsive" src="{{asset('admin-assets/images/elements/nofound1.png')}}" alt="لا تتوفر نتائج">
                                                        </div>
                                                        <div style="text-align: center" id="load_more_btn">
                                                            <button class="btn btn-primary" onclick="load_more()" >تحميل المزيد</button>

                                                        </div>
                                                        <style>
                                                            .modal-body{
                                                                height: 450px;
                                                                overflow-x: auto;
                                                                background: #eee;
                                                            }
                                                            .modal-body::-webkit-scrollbar-track
                                                            {
                                                                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                                                                background-color: #F5F5F5;
                                                            }

                                                            .modal-body::-webkit-scrollbar
                                                            {
                                                                width: 6px;
                                                                background-color: #F5F5F5;
                                                            }

                                                            .modal-body::-webkit-scrollbar-thumb
                                                            {
                                                                background-color: #607d8b;
                                                            }

                                                            .img-path{
                                                                display: none;
                                                            }



                                                            .modal-body .row{
                                                                margin-left: 0px;
                                                                margin-right: -10px;
                                                            }

                                                            .modal-body .col-md-2{
                                                                padding-left: 2px;
                                                                padding-right: 10px;
                                                            }

                                                            .modal-body .use-img{
                                                                font-size: 12px;
                                                                color: #607d8b;

                                                            }
                                                            .embed-responsive-16by9{
                                                                padding-bottom: 70% !important;
                                                            }
                                                            .border-grey.border-lighten-2{
                                                                padding: 8px;
                                                                background: #fff;
                                                                border: 1px solid #E0E0E0!important;
                                                            }
                                                            .img_use {
                                                                position: absolute;
                                                                font-size: 10px;
                                                                top: 7px;
                                                                right: 7px;
                                                                padding: 3px 5px;
                                                                background: rgba(96, 125, 139, 0.8);
                                                                color: #fff;
                                                                cursor: pointer;
                                                                border: 0;
                                                            }
                                                            .loader {
                                                                margin:0 auto;
                                                                border: 5px solid #fff;
                                                                border-radius: 50%;
                                                                border-top: 5px solid #967adc;
                                                                width: 50px;
                                                                height: 50px;
                                                                margin-bottom: 20px;
                                                                -webkit-animation: spin 2s linear infinite; /* Safari */
                                                                animation: spin 2s linear infinite;
                                                            }

                                                            /* Safari */
                                                            @-webkit-keyframes spin {
                                                                0% { -webkit-transform: rotate(0deg); }
                                                                100% { -webkit-transform: rotate(360deg); }
                                                            }

                                                            @keyframes spin {
                                                                0% { transform: rotate(0deg); }
                                                                100% { transform: rotate(360deg); }
                                                            }
                                                        </style>


                                                    </div>
                                                    <div class="modal-footer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                </section>

                <script src="{{asset('admin-assets/js/tinymce/tinymce.min.js')}}"></script>
                <script src="{{asset('admin-assets/js/index.js')}}" type="text/javascript"></script>
            </div>
        </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <script>
       function deleteimg(im,div) {

            $.ajax({
                type: "POST",
                url: "{{url('/delImagesNews')}}",
                data: {'img': im,
                    '_token':'{{csrf_token()}}'},
                dataType: "json",
                cache:false,
                success:
                        function(data){
                            div.remove();

                        }
            });
       }
    </script>

    <script>
        function deletevideo(vd,div) {

            $.ajax({
                type: "POST",
                url: "{{url('/delVidoesNews')}}",
                data: {'video': vd,
                    '_token':'{{csrf_token()}}'},
                dataType: "json",
                cache:false,
                success:
                        function(data){
                            div.remove();

                        }
            });
        }
    </script>

    <script>
        var index=18;
        var baseURL= "{{asset('')}}";
        var baseURL2= "{{asset('')}}thumb.php?src=";
        var size= "&size=140x95";
        var count=0;
        var count2=0;

        function openModal() {
            $('#custom').modal("show");
            if(count==0) {
                $('#img_location').empty();
                $.ajax({
                    url: baseURL + '/getImages',
                    method: 'get',
                    data :{
                        offset : 0,
                        txt: $('#search-contacts').val()
                    },
                    dataType: 'json',
                    beforeSend: function(){
                        $('#image').show();
                        $('#load_more_btn').hide();
                    },
                    complete: function(){
                        $('#image').hide();
                    },

                    success: function (response) {

                        var len = response.length;
                        var i = 0;
                        if(len==0){
                            $('#load_more_btn').hide();
                            $('#error_msg').show();

                        }else {
                            if(len<18){
                                $('#load_more_btn').hide();
                                $('#error_msg').hide();
                            }else{
                                $('#load_more_btn').show();
                                $('#error_msg').hide();
                            }
                            while (len > i) {
                                $('#img_location').append(
                                        '<div class="col-md-2">' +
                                        '<div class="card border-grey border-lighten-2">' +
                                        '<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">' +
                                        '<button class="img_use"  link="'+response[i].path+'">إستخدام</button>'+
                                        '<img class="gallery-thumbnail" style="width:140px;height:95px; " src="' + baseURL2 + response[i].path + size +  '" />' +
                                        '</div>' +
                                        '<p class="img-path">' + response[i].path + '</p>' +
                                        '<div class="text-xs-center" style="height: 22px; padding-top: 3px; overflow: hidden">' +
                                        '<span href="" class="use-img" style="font-size: 10px;">' + response[i].name + '</span>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>'
                                );

                                i++;
                            }
                            count++;
                        }


                    }
                });

            }
        }

        $("#img_location").on('click','.img_use',function (e) {
            e.preventDefault();
            $('#filesToUpload').parent().parent().removeClass('error');
            $('#filesToUpload').next().remove();
            $('#im_ar').val($(this).attr('link'));
            $('#image-select').attr('src',"{{asset('')}}"+$(this).attr('link'));
            $('#custom').modal('hide');
        });


        function load_more() {



            $.ajax({
                url: baseURL + '/getImages',
                method: 'get',
                data :{
                    offset : index,
                    txt: $('#search-contacts').val()
                },
                dataType: 'json',
                beforeSend: function(){
                    $('#image').show();
                    $('#load_more_btn').hide();
                },
                complete: function(){
                    $('#image').hide();
                },
                success: function (response) {

                    var len = response.length;
                    var i = 0;
                    if(len==0){
                        $('#load_more_btn').hide();
                        $('#error_msg').show();
                    }
                    else {
                        if(len<18){
                            $('#load_more_btn').hide();
                            $('#error_msg').hide();
                        }else{
                            $('#load_more_btn').show();
                            $('#error_msg').hide();
                        }
                        while (len > i) {
                            $('#img_location').append(
                                    '<div class="col-md-2">' +
                                    '<div class="card border-grey border-lighten-2">' +
                                    '<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">' +
                                    '<button class="img_use"  link="' + response[i].path + '">إستخدام</button>' +
                                    '<img class="gallery-thumbnail" style="width:140px;height:95px; " src="' + baseURL2 + response[i].path + size +  '" />' +
                                    '</div>' +
                                    '<p class="img-path">' + response[i].path + '</p>' +
                                    '<div class="text-xs-center" style="height: 22px; padding-top: 3px; overflow: hidden">' +
                                    '<span href="" class="use-img" style="font-size: 10px;">' + response[i].name + '</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                            );

                            i++;
                        }
                        index = index + 18;
                    }
                }
            });


        }

        function load_more2() {

            $('#img_location').empty();

            $.ajax({
                url: baseURL + '/getImages',
                method: 'get',
                data :{
                    offset : 0,
                    txt: $('#search-contacts').val()
                },
                dataType: 'json',

                beforeSend: function(){
                    $('#image').show();
                    $('#load_more_btn').hide();
                },
                complete: function(){
                    $('#image').hide();
                },
                success: function (response) {

                    var len = response.length;
                    var i = 0;
                    if (len == 0) {
                        $('#load_more_btn').hide();
                        $('#error_msg').show();
                    } else {
                        if(len<18){
                            $('#load_more_btn').hide();
                            $('#error_msg').hide();
                        }else{
                            $('#load_more_btn').show();
                            $('#error_msg').hide();
                        }
                        while (len > i) {
                            $('#img_location').append(
                                    '<div class="col-md-2">' +
                                    '<div class="card border-grey border-lighten-2">' +
                                    '<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">' +
                                    '<button class="img_use"  link="' + response[i].path + '">إستخدام</button>' +
                                    '<img class="gallery-thumbnail" style="width:140px;height:95px; " src="' + baseURL2 + response[i].path + size + '" />' +
                                    '</div>' +
                                    '<p class="img-path">' + response[i].path + '</p>' +
                                    '<div class="text-xs-center" style="height: 22px; padding-top: 3px; overflow: hidden">' +
                                    '<span href="" class="use-img" style="font-size: 10px;">' + response[i].name + '</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                            );

                            i++;
                        }


                    }
                }

            });
            index=18;
            count=0;

        }

        $('#search-btn').on( "click", function( event ) {
            event.preventDefault();
            load_more2();

        });

        $('#search-contacts').on( "keydown", function( event ) {
            if ( event.which==13) {
                event.preventDefault();
            }
        });

        $('#search-contacts').on( "keyup",function(e) {

            if ( e.which==13){
                e.preventDefault();
                load_more2();

            }

            return false;
        });



    </script>

@endsection
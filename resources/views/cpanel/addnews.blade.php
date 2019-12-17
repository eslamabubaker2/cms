@extends('cpanel.app')

@section('css')
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('libs/summernote/summernote.css')}}">--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/libs/summernote/summernote.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/widgets/upload.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/noty/noty.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/jquery-confirm/jquery-confirm.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/libs/jquery-confirm/jquery.confirm.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/select2/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/libs/select2/select2.min.css')}}">
@stop

@section('content')
    <div class="column page">
        <div class="header">
            <section class="title">
                <h3>إضافة خبر جديد </h3>
            </section>
        </div>

        <div class="content">
            <div class="body content-nav">

                <div class="nav-body">
                    <div class="nav-body-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-8">
                                    {{--<h4 id="form-validation-basic-demo">Basic Demo</h4>--}}
                                    <div class="card panel">
                                        <div class="card-block">
                                            <form>
                                                <div class="form-group">
                                                    <label>العنوان الإشاري</label>
                                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="أدخل العنوان الإشاري"
                                                           data-validation="required"
                                                           data-validation-error-msg-required="هذا الحقل مطلوب">
                                                    {{--<small class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                                </div>
                                                <div class="form-group">
                                                    <label>عنوان الخبر</label>
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="أدخل عنوان الخبر"
                                                           data-validation="required"
                                                           data-validation-error-msg-required="هذا الحقل مطلوب">
                                                </div>
                                                <div class="form-group">
                                                    <label>مقتطف الخبر</label>
                                                    <textarea rows="3" id="maxlength-area" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>الكاتب</label>
                                                    <div class="form-group">
                                                        <select class="form-control select-rtl-support">
                                                            <option></option>
                                                            <option data-thumbnail="https://avatars2.githubusercontent.com/u/7187348?v=3&s=40" value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">West Virginia</option>
                                                        </select>
                                                    </div>
                                                    {{--<select title="Select your surfboard" class="selectpicker">--}}
                                                    {{--<option>Select...</option>--}}
                                                    {{--<option data-thumbnail="images/icon-chrome.png">Chrome</option>--}}
                                                    {{--<option data-thumbnail="images/icon-firefox.png">Firefox</option>--}}
                                                    {{--<option data-thumbnail="images/icon-ie.png">IE</option>--}}
                                                    {{--<option data-thumbnail="images/icon-opera.png">Opera</option>--}}
                                                    {{--<option data-thumbnail="images/icon-safari.png">Safari</option>--}}
                                                    {{--</select>                                       --}}

                                                </div>

                                                <div class="form-group">
                                                    <label>صورة الخبر</label>
                                                    <button class="btn btn-primary btn-file">
                                                        <span class="la la-cloud-upload icon"></span>
                                                        <span class="text">اختر ملف</span>
                                                        <input type="file"
                                                               data-validation="mime size required dimension"
                                                               data-validation-allowing="jpg, png"
                                                               data-validation-max-size="2048kb"
                                                               data-validation-dimension="min600x600"
                                                               data-validation-error-msg-required="لم يتم تحديد صورة"
                                                               data-validation-error-msg-dimension="أبعاد الصورة غير صحيحة (بحد أدنى 600*600)"
                                                               data-validation-error-msg-size="الملف الذي تحاول تحميله كبير جدًا (بحد أقصى 2 ميغابايت)"
                                                               data-validation-error-msg-mime="لا يُسمح إلا بملفات من نوع jpg , png , jpeg">
                                                    </button>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               data-validation="required"
                                                               data-validation-error-msg="You have to agree to our terms">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">خبر رئيسي</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">نشر</button>
                                                    <button type="submit" class="btn btn-warning">حفظ كمسودة</button>
                                                    <button  class="btn btn-primary-outline light">معاينة</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    {{--<h4>معرض صور</h4>--}}
                                    <div id="widget-attachments-images-only" class="card panel widget-attachments">
                                        <div class="card-block">
                                            <h5 class="header">معرض صور</h5>

                                            <div id="file-upload-dropzone-images-only" class="upload-block">
                                                <span class="icon la la-cloud-upload"></span>
                                                <span class="text">سحب وإفلات الصور هنا</span>
                                                <span class="upload-btn">
                                                <span class="btn-separator">أو</span>
                                                <button class="btn btn-primary btn-file">
                                                    <span class="la la-cloud-upload icon"></span>
                                                    <span class="text">اختر ملف</span>
                                                    <input id="file-upload-widget-images-input" type="file" name="files[]" data-url="http://themesanytime.com/uploads/file.php" multiple="">
                                                </button>
                                            </span>
                                            </div>

                                            <div class="uploading-files-container" style="display: none;">
                                                <h5 class="header">الصور المرفوعة</h5>

                                                <div class="uploading-files"><div id="file-uploading-1531825344453" class="uploading-progress-block file-uploading-error">                             <span class="filename">2018-07-11_19.42.20.jpg</span>                             <div class="progress progress-inline">                             <div class="progress progress-sm">                             <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%;" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100"></div>                             </div>                             <span class="amount">100%</span>                             </div>                             <div class="cancel-block">                                 <a class="icon la la-close"></a>                             </div>                     </div></div>
                                            </div>

                                            {{--<h5 class="header">الصور المرفوعة</h5>--}}

                                            <div class="files">
                                                <ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>نص الخبر</h3>
                                    <textarea class="form-control editor_text" name="txt" placeholder="اكتب هنا متن الخبر" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="اكتب هنا متن الخبر" ></textarea>
                                    {{--<textarea name="text" id="summernote-editor-default" dir="rtl"></textarea>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('libs/jquery-form-validator/jquery.form-validator.min.js')}}"></script>
    <script src="{{ asset('assets/scripts/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('assets/scripts/tinymce/index.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/load-image.all.min.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/canvas-to-blob.min.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/jquery.iframe-transport.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/jquery.fileupload.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/jquery.fileupload-process.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/jquery.fileupload-image.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/jquery.fileupload-audio.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/jquery.fileupload-video.js')}}"></script>
    <script src="{{ asset('libs/jquery-file-upload/js/jquery.fileupload-validate.js')}}"></script>
    <script src="{{ asset('libs/noty/noty.min.js')}}"></script>
    <script src="{{ asset('libs/jquery-confirm/jquery-confirm.min.js')}}"></script>
    <script src="{{ asset('libs/select2/js/select2.min.js')}}"></script>
    {{--<script src="{{ asset('libs/summernote/summernote.min.js')}}"></script>--}}
    {{--<script src="{{ asset('libs/summernote/lang/summernote-ar-AR.min.js')}}"></script>--}}
    <script type="application/javascript">
        (function ($) {
            $(document).ready(function() {
                $.validate({
                    modules : 'location, date, security, file',
                    onModulesLoaded : function() {

                    }
                });
                $('#maxlength-area').restrictLength($('#maxlength-label'));
            });
        })(jQuery);

        $('select.select-rtl-support').select2({
            dir: 'rtl',
//            templateResult: formatState
        });

        //        (function ($) {
        //            $('#summernote-editor-default').summernote({
        //                lang: 'ar-AR',
        //                height: 200,
        //                tabsize: 2,
        //                placeholder: 'اكتب هنا متن الخبر',
        //                direction: 'rtl'
        //            });
        //            $('#summernote-editor-air-mode').summernote({
        //                airMode: true
        //            });
        //        })(jQuery);
    </script>

    <script type="application/javascript">
        (function ($) {
            $(document).ready(function() {
                function bytesToSize(bytes) {
                    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                    if (bytes == 0) return '0 Byte';
                    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                    return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
                }



                // DropZone implementation
                $(".attach-files-widget .upload").on('dragover', function (e) {
                    $(this).addClass('dragover');
                }).on('dragleave', function (e) {
                    $(this).removeClass('dragover');
                }).on('drop', function (e) {
                    $(this).removeClass('dragover');
                });

                $(document).bind('drop dragover', function (e) {
                    e.preventDefault();
                });

                // Upload images only
                $('#file-upload-widget-images-input').fileupload({
                    dropZone: $('#file-upload-dropzone-images-only'),
                    autoUpload: false,
                    dataType: 'json',
                    singleFileUploads: true,
                    acceptFileTypes:  /(jpeg)|(png)|(gif)|(jpg)$/i,
                    add: function (e, data) {
                        $('#widget-attachments-images-only .uploading-files-container').show();
                        var jqXHR;

                        $.each(data.files, function (index, file) {
                            var fileUploadInfo = '<div id="file-uploading-' + file.lastModified + '" class="uploading-progress-block"> \
                            <span class="filename">' + file.name + '</span> \
                            <div class="progress progress-inline"> \
                            <div class="progress progress-sm"> \
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 0" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100"></div> \
                            </div> \
                            <span class="amount">0%</span> \
                            </div> \
                            <div class="cancel-block"> \
                                <a class="icon la la-close"></a> \
                            </div> \
                    </div>';
                            data.context = $(fileUploadInfo).appendTo($('#widget-attachments-images-only .uploading-files'));

                            $(data.context).find(".cancel-block").click(function() {
                                jqXHR.abort();
                                data.context.remove();
                            })
                        });

                        data.process().done(function () {
                            jqXHR = data.submit();
                        });
                    },
                    progress: function (e, data) {
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        var size = data.files[0].size;
                        var uploadedBytes = (size / 100) * progress;
                        var id = 'file-uploading-' + data.files[0].lastModified;

                        $('#' + id).find('.progress-bar').css('width', progress + '%');
                        $('#' + id).find('.amount').text(progress + '%');
                    },
                    stop: function (e) {
                        $('#widget-attachments-images-only .uploading-files-container').hide();
                    },
                    done: function (e, data) {
                        $.each(data.files, function (index, file) {
                            var id = 'file-uploading-' + data.files[0].lastModified;
                            $('#' + id).remove();
                        });

                        var uploadedFileInfo = '<li class="file"> \
                        <img class="thumb" src="assets/img/thumbs/ph-1.png"> \
                            <a class="icon la la-trash remove"></a> \
                        </li>';
                        $(uploadedFileInfo).appendTo($('#widget-attachments-images-only .files ul'));

                        new Noty({
                            text: 'الملف ' + data.result.file.name + ' تم رفعه بنجاح!',
                            type   : 'success',
                            theme  : 'mint',
                            layout : 'topRight',
                            timeout: 2000
                        }).show();
                    },
                    fail: function (e, data) {
                        $.each(data.files, function (index, file) {
                            var id = 'file-uploading-' + data.files[0].lastModified;
                            $('#' + id).addClass('file-uploading-error');
                        });

                        new Noty({
                            text: 'خطأ في الرفع! الرجاء المحاولة مرة أخرى.',
                            type   : 'error',
                            theme  : 'mint',
                            layout : 'topRight',
                            timeout: 2000
                        }).show();
                    }
                });

                $(document).on('click', '#widget-attachments-images-only .files .remove', function () {
                    var file = $(this).closest('li');

                    $.confirm({
                        title: 'تحذير!',
                        content: 'هل أنت متأكد من أنك تريد حذف هذا الملف؟',
                        type: 'danger',
                        buttons: {
                            confirm: {
                                text: 'نعم, حذف',
                                btnClass: 'btn-danger',
                                action: function() {
                                    file.remove();
                                }
                            },
                            cancel: {
                                text: 'إلغاء'
                            }
                        }
                    });
                });
            });
        })(jQuery);
    </script>



@stop



{{--@extends('cpanel.app')--}}
{{--@section('content')--}}

    {{--<div class="robust-content content container-fluid" xmlns="">--}}
        {{--<div class="content-wrapper">--}}
            {{--<div class="content-header row">--}}
                {{--<div class="breadcrumb-wrapper col-xs-12">--}}
                    {{--<ol class="breadcrumb">--}}
                        {{--<li class="breadcrumb-item"><a href="{{asset('cpanel/home')}}">الرئيسية</a>--}}
                        {{--</li>--}}
                        {{--<li class="breadcrumb-item"><a href="{{asset('cpanel/news')}}">الأخبار</a>--}}
                        {{--</li>--}}
                        {{--<li class="breadcrumb-item active">إضافة خبر--}}
                        {{--</li>--}}
                    {{--</ol>--}}
                {{--</div>--}}

                {{--<div class="content-header-lead col-xs-12 mt-1">--}}

                        {{--@if(session()->has('success'))--}}
                        {{--<div class="alert alert-success" role="alert">&nbsp;--}}
                            {{--<i class="icon-checkmark"></i> {{ session('success') }}--}}

                        {{--</div>--}}
                        {{--@endif--}}

                        {{--@if ($errors->all())--}}
                        {{--<div class="contact_form alert alert-danger" role="alert">--}}
                            {{--<i class="icon-close"></i> فشلت العملية--}}
                        {{--</div>--}}
                        {{--@endif--}}



                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="content-body">--}}
                {{--<!-- Responsive integration table -->--}}
                {{--<section id="responsive" class="input-validation checkbox-validation">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<div class="card">--}}
                                {{--<div class="card-header">--}}
                                    {{--<h4 class="card-title"><i class="icon-tag"></i> إضافة خبر </h4>--}}
                                    {{--<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>--}}
                                    {{--<div class="heading-elements">--}}
                                        {{--<ul class="list-inline mb-0">--}}
                                            {{--<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>--}}
                                            {{--<li><a data-action="reload"><i class="icon-reload"></i></a></li>--}}
                                            {{--<li><a data-action="expand"><i class="icon-expand2"></i></a></li>--}}
                                            {{--<li><a data-action="close"><i class="icon-cross2"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                                {{--<div class="card-body collapse in">--}}
                                    {{--<div class="card-block card-dashboard">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-8">--}}
                                                {{--<ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified">--}}
                                                    {{--<li class="nav-item">--}}
                                                        {{--<a class="nav-link active" id="baseOnlyIcon-tab11" data-toggle="tab" href="#tabOnlyIcon11" aria-controls="tabOnlyIcon11" aria-expanded="true"><i class="icon-text-color"></i> الخبر </a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="nav-item">--}}
                                                        {{--<a class="nav-link" id="baseOnlyIcon-tab12" data-toggle="tab" aria-controls="tabOnlyIcon12" href="#tabOnlyIcon12" aria-expanded="false"><i class="icon-picture-o"></i> الصور</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="nav-item">--}}
                                                        {{--<a class="nav-link" id="baseOnlyIcon-tab13" data-toggle="tab" aria-controls="tabOnlyIcon13" href="#tabOnlyIcon13" aria-expanded="false"><i class="icon-video"></i> الفيديو</a>--}}
                                                    {{--</li>--}}

                                                {{--</ul></div></div>--}}
                                        {{--<form class="form" novalidate="" action="{{url('/cpanel/addnews')}}" method="post" onsubmit="return validateForm()" enctype="multipart/form-data"/>--}}

                                        {{--@csrf--}}
                                        {{--<div class="tab-content px-1 pt-1">--}}
                                            {{--<div role="tabpanel" class="tab-pane fade in active" id="tabOnlyIcon11" aria-expanded="false" aria-labelledby="baseOnlyIcon-tab11">--}}
                                                {{--<br>--}}

                                                {{--<div class="form-body">--}}

                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-md-2 text-xs-right"> العنوان الرئيسي:</label>--}}
                                                        {{--<div class="col-md-7">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="controls">--}}
                                                                    {{--<input type="text" id="issueinput1" class="form-control"  value="{{ old('title') }}"  required="" data-validation-required-message=" العنــوان الرئيسي" placeholder="عنوان رئيسي" name="title" data-toggle="tooltip" data-trigger="hover"  data-title="العنوان الرئيسي" />--}}
                                                                {{--</div></div>--}}
                                                        {{--</div>--}}
                                                        {{--@if ($errors->has('title'))--}}
                                                            {{--{{$errors->first('title')}}--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-md-2 text-xs-right"> العنوان الاشاري:</label>--}}
                                                        {{--<div class="col-md-7">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="controls">--}}
                                                                    {{--<input type="text" id="issueinput2" class="form-control" value="{{ old('caption') }}"   placeholder="العنوان الاشاري" name="caption" data-toggle="tooltip" data-trigger="hover"  data-title="العنوان الاشاري" />--}}
                                                                {{--</div></div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-md-2 text-xs-right" >مقتطف :</label>--}}
                                                        {{--<div class="col-md-7">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<input type="text" id="issueinput3" class="form-control" name="breif" value="{{ old('breif') }}" placeholder="مقتطف" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="مقتطف"/>--}}
                                                            {{--</div></div>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-md-2 text-xs-right" >نص الخبر:</label>--}}
                                                        {{--<div class="col-md-7">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="controls">--}}
                                                                    {{--<textarea required id="issueinput4" rows="10" class="form-control" name="text"  placeholder="نص الموضوع" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="نص الموضوع" >{{ old('text') }}</textarea>--}}
                                                                {{--</div></div></div>--}}

                                                    {{--</div>--}}
                                                    {{--@if ($errors->has('text'))--}}
                                                        {{--{{$errors->first('text')}}--}}
                                                    {{--@endif--}}



                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-md-2 text-xs-right">القسم:</label>--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<select id="issueinput5" name="category_id" required="" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="الأقسام">--}}
                                                                    {{--@foreach ($categories as $category)--}}
                                                                    {{--<option value="{{$category->id }}" {{ (collect(old('category_id'))->contains($category->id)) ? 'selected':'' }}>{{$category->name }} </option>--}}
                                                                    {{--@endforeach--}}
                                                                {{--</select>--}}




                                                            {{--</div></div>--}}
                                                        {{--<!--</div>-->--}}
                                                        {{--<div class="col-md-2 col-sm-2 ">--}}
                                                            {{--<div class="controls">--}}
                                                                {{--<div class="skin skin-square">--}}
                                                                    {{--<input type="checkbox" value="1" name="activated_id"  checked  id="input-170" />--}}
                                                                    {{--<label for="input-170">تفعيل</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div></div>--}}
                                                        {{--<div class="col-md-2 col-sm-2 ">--}}
                                                            {{--<div class="controls">--}}
                                                                {{--<div class="skin skin-square">--}}
                                                                    {{--<input type="checkbox" value="1" name="more_news" @if((old('more_news'))) checked @endif id="input-17" />--}}
                                                                    {{--<label for="input-17">المزيد من الأخبار</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div></div>--}}
                                                        {{--<div class="col-md-2 col-sm-2 ">--}}
                                                            {{--<div class="controls">--}}
                                                                {{--<div class="skin skin-square">--}}
                                                                    {{--<input type="checkbox" name="show_home_id" value="1" @if((old('show_home_id'))) checked @endif id="input-15"  />--}}
                                                                    {{--<label for="input-15">خبر رئيسي</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-2 col-sm-2 ">--}}
                                                            {{--<div class="controls">--}}
                                                                {{--<div class="skin skin-square">--}}
                                                                    {{--<input type="checkbox" name="pin_home" value="1" @if((old('pin_home'))) checked @endif id="input-18"  />--}}
                                                                    {{--<label for="input-18">تثبيت الخبر</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-2 col-sm-2 ">--}}
                                                            {{--<div class="controls">--}}
                                                                {{--<div class="skin skin-square">--}}
                                                                    {{--<input type="checkbox" value="1" name="news_ticker_id" @if((old('news_ticker_id'))) checked @endif id="input-16"  />--}}
                                                                    {{--<label for="input-16">شريط الأخبار</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div></div>--}}
                                                        {{--<div class="col-md-2 col-sm-2 ">--}}
                                                            {{--<div class="controls">--}}
                                                                {{--<div class="skin skin-square">--}}
                                                                    {{--<input type="checkbox" value="1" name="special" @if((old('special'))) checked @endif id="input-19"  />--}}
                                                                    {{--<label for="input-16">موضوع مميز</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div></div>--}}

                                                    {{--</div>--}}

                                                    {{--<div class="row" id="upload-img">--}}
                                                        {{--<label class="col-md-2 text-xs-right" >اضافة صورة:</label>--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<div class="form-group" style="margin-bottom: 10px">--}}
                                                                {{--<div class="controls">--}}
                                                                    {{--<input type="file" onchange="openFile(event)" accept="image/x-png,image/gif,image/jpeg" name="img" id="filesToUpload"  class="img_found form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>--}}
                                                                {{--</div></div>--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="controls" id="desc_img" style="display: none">--}}
                                                                    {{--<input style="border-radius: 5px; width: 80%" type="text" id="issueinput111" class="form-control" placeholder="أضف وصف للصورة" name="desc_img"  data-toggle="tooltip" data-trigger="hover"  data-title="وصف للصورة" />--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<script>--}}
                                                            {{--$(function() {--}}
                                                                {{--$('.img_found').change(function(){--}}
                                                                    {{--if ($(this).val() != '') {--}}
                                                                        {{--$('#desc_img').show();--}}
                                                                    {{--} else {--}}
                                                                        {{--$('#desc_img').hide();--}}

                                                                    {{--}--}}
                                                                {{--});--}}
                                                            {{--});--}}
                                                        {{--</script>--}}

                                                        {{--<script>--}}

                                                            {{--var openFile = function(file) {--}}
                                                                {{--var input = file.target;--}}

                                                                {{--var reader = new FileReader();--}}
                                                                {{--reader.onload = function(){--}}
                                                                    {{--var dataURL = reader.result;--}}
                                                                    {{--var output = document.getElementById('image-select');--}}
                                                                    {{--output.src = dataURL;--}}
                                                                {{--};--}}
                                                                {{--reader.readAsDataURL(input.files[0]);--}}
                                                            {{--};--}}
                                                        {{--</script>--}}
                                                        {{--<div class="col-md-4">--}}
                                                            {{--<div class="input-group">--}}
                                                                {{--<input type="text" id="im_ar" readonly="readonly" style="height: 37px" class="form-control" placeholder="إختيار من الأرشيف" value="{{ old('img_archive') }}" name="img_archive" aria-describedby="button-addon6">--}}
                                                                {{--<span class="input-group-btn" id="button-addon6">--}}
                                          {{--<button onclick="openModal()" class="btn bg-blue-grey white "  style="height: 37px" type="button"><i class="icon-plus"></i></button>--}}
                                          {{--</span>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-3">--}}

                                                            {{--<div style=" height: 100px; width: 130px; overflow: hidden; left: 110px; ">--}}
                                                                {{--<img src="{{asset('admin-assets/images/elements/img-holder.png')}}" height="100px"  id="image-select" alt=" ">--}}
                                                            {{--</div>--}}
                                                            {{--<div class="controls" style="position: absolute;margin-top: 15px">--}}
                                                                {{--<div class="skin skin-square">--}}
                                                                    {{--<input type="checkbox" value="1" name="water_img" id="input-25"  />--}}
                                                                    {{--<label style="font-size: 12px" for="input-25">استخدام علامة مائية</label>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                    {{--</div>--}}


                                                    {{--<div class="row" id="warning" >--}}
                                                        {{--<label class="col-md-2 text-xs-right">الكاتب :</label>--}}
                                                        {{--<div class="col-md-7">--}}
                                                            {{--<div class=" form-group ">--}}
                                                                {{--<div class="controls">--}}
                                                                    {{--<select  name="author_id" required="" class=" select2 select2-rtl  form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="الكتاب">--}}
                                                                        {{--<option value="-1">اختر كاتب</option>--}}

                                                                        {{--@foreach ($authors as $author)--}}
                                                                        {{--<option value="{{$author->id }}"  {{ (collect(old('author_id'))->contains($author->id)) ? 'selected':'' }}>{{$author->name }} </option>--}}
                                                                        {{--@endforeach--}}



                                                                    {{--</select>--}}

                                                                {{--</div>--}}


                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}



                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-md-2 text-xs-right" >اضافة هاشتاق:</label>--}}
                                                        {{--<div class="col-md-7">--}}
                                                            {{--<select name="tags[]" class="select2-tags form-control" dir="rtl" multiple="" id="select2-tags">--}}

                                                                {{--@foreach ($tags as $tag)--}}
                                                                {{--<option value="{{$tag->id }} ">{{$tag->name }} </option>--}}
                                                                {{--@endforeach--}}

                                                            {{--</select>--}}
                                                        {{--</div>--}}

                                                    {{--</div>--}}


                                                {{--</div>--}}


                                                {{--<!---->--}}


                                            {{--</div>--}}

                                            {{--<div class="tab-pane fade" id="tabOnlyIcon12" aria-labelledby="baseOnlyIcon-tab12" aria-expanded="false">--}}
                                                {{--<br>--}}

                                                {{--<div class="row">--}}
                                                    {{--<label class="col-md-2 text-xs-right" >اضافة صور أسفل الخبر:</label>--}}
                                                    {{--<div class="col-md-7">--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<div class="controls">--}}
                                                                {{--<input type="file" accept="image/x-png,image/gif,image/jpeg"  name="news_imgs[]"  multiple   class="form-control"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>--}}
                                                            {{--</div></div>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}



                                            {{--</div>--}}

                                            {{--<div class="tab-pane fade " id="tabOnlyIcon13" aria-labelledby="baseOnlyIcon-tab23" aria-expanded="true">--}}
                                                {{--<br>--}}

                                                {{--<div class="row form-body" id="link">--}}
                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-md-2 text-xs-right">فيديو من اليوتيوب : </label>--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="controls">--}}
                                                                    {{--<input type="text" name="youtube_link" class="form-control" placeholder=" أدخل رابط الفيديو من اليوتيوب"  />--}}
                                                                {{--</div>--}}
                                                            {{--</div></div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-md-2 text-xs-right">فيديو من الفيس بوك:</label>--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="controls">--}}
                                                                    {{--<input type="text" name="fb_link" class="form-control" placeholder=" أدخل رابط الفيديو من الفيس بوك"  />--}}
                                                                {{--</div>--}}
                                                            {{--</div></div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-2 text-xs-right">--}}
                                                            {{--<label> أو رفع فيديو من الجهاز :</label>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="controls">--}}
                                                                    {{--<input type="file"  accept="video/*" name="local_video" id="filesToUpload" class="form-control video_file"  placeholder="" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=""/>--}}
                                                                {{--</div></div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<label for="" style="color: red" class="col-md-4 text-xs-right">الحــد الأقصــى المسمــوح به 150 ميجـا بايت</label>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}

                                            {{--</div>--}}
                                            {{--<div class="form-actions">--}}
                                                {{--<div class="text-xs-right">--}}
                                                    {{--<button type="submit" value = "upload" name="fileSubmit" class="btn btn-success"> تنفيذ <i class="icon-thumbs-up position-right"></i></button>--}}
                                                    {{--<!--                          <button type="submit" class="btn btn-info"> معاينة <i class="fa fa-eye position-right"></i></button>-->--}}
                                                    {{--<button type="reset" class="btn btn-danger"> مسح الحقول <i class="icon-refresh position-right"></i></button>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}


                                        {{--</div>--}}
                                        {{--</form>--}}
                                        {{--<!--</form>-->--}}
                                        {{--<div class="modal  fade text-xs-left" id="custom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel13" aria-hidden="true">--}}
                                            {{--<div class="modal-dialog modal-lg" style="max-width: 1050px" role="document">--}}
                                                {{--<div class="modal-content">--}}
                                                    {{--<div class="modal-header bg-blue-grey white">--}}
                                                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                            {{--<span aria-hidden="true">&times;</span>--}}
                                                        {{--</button>--}}
                                                        {{--<h4 class="modal-title" id="myModalLabel13">أرشيف الصور</h4>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-12">--}}
                                                            {{--<form action="#" >--}}
                                                                {{--<div class="has-feedback has-feedback-left col-md-6 " style="margin: 15px 0 10px 0">--}}
                                                                    {{--<input type="search" id="search-contacts" style="height: 33px;" class="form-control" placeholder="أدخل كلمة البحث ...">--}}
                                                                    {{--<div class="form-control-position">--}}
                                                                        {{--<button class="btn bg-blue-grey white" id="search-btn">--}}
                                                                            {{--بحث--}}


                                                                        {{--</button>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</form>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="modal-body">--}}



                                                        {{--<div class="row" id="img_location">--}}

                                                        {{--</div>--}}
                                                        {{--<div id="image">--}}
                                                            {{--<div class="loader"></div>--}}
                                                        {{--</div>--}}
                                                        {{--<div id="error_msg" style="display: none;text-align: center;line-height: 400px;">--}}
                                                            {{--<img class="img-responsive" src="{{asset('admin-assets/images/elements/nofound1.png')}}" alt="لا تتوفر نتائج">--}}
                                                        {{--</div>--}}
                                                        {{--<div style="text-align: center" id="load_more_btn">--}}
                                                            {{--<button class="btn btn-primary" onclick="load_more()" >تحميل المزيد</button>--}}

                                                        {{--</div>--}}
                                                        {{--<style>--}}
                                                            {{--.modal-body{--}}
                                                                {{--height: 450px;--}}
                                                                {{--overflow-x: auto;--}}
                                                                {{--background: #eee;--}}
                                                            {{--}--}}
                                                            {{--.modal-body::-webkit-scrollbar-track--}}
                                                            {{--{--}}
                                                                {{---webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);--}}
                                                                {{--background-color: #F5F5F5;--}}
                                                            {{--}--}}

                                                            {{--.modal-body::-webkit-scrollbar--}}
                                                            {{--{--}}
                                                                {{--width: 6px;--}}
                                                                {{--background-color: #F5F5F5;--}}
                                                            {{--}--}}

                                                            {{--.modal-body::-webkit-scrollbar-thumb--}}
                                                            {{--{--}}
                                                                {{--background-color: #607d8b;--}}
                                                            {{--}--}}

                                                            {{--.img-path{--}}
                                                                {{--display: none;--}}
                                                            {{--}--}}



                                                            {{--.modal-body .row{--}}
                                                                {{--margin-left: 0px;--}}
                                                                {{--margin-right: -10px;--}}
                                                            {{--}--}}

                                                            {{--.modal-body .col-md-2{--}}
                                                                {{--padding-left: 2px;--}}
                                                                {{--padding-right: 10px;--}}
                                                            {{--}--}}

                                                            {{--.modal-body .use-img{--}}
                                                                {{--font-size: 12px;--}}
                                                                {{--color: #607d8b;--}}

                                                            {{--}--}}
                                                            {{--.embed-responsive-16by9{--}}
                                                                {{--padding-bottom: 70% !important;--}}
                                                            {{--}--}}
                                                            {{--.border-grey.border-lighten-2{--}}
                                                                {{--padding: 8px;--}}
                                                                {{--background: #fff;--}}
                                                                {{--border: 1px solid #E0E0E0!important;--}}
                                                            {{--}--}}
                                                            {{--.img_use {--}}
                                                                {{--position: absolute;--}}
                                                                {{--font-size: 10px;--}}
                                                                {{--top: 7px;--}}
                                                                {{--right: 7px;--}}
                                                                {{--padding: 3px 5px;--}}
                                                                {{--background: rgba(96, 125, 139, 0.8);--}}
                                                                {{--color: #fff;--}}
                                                                {{--cursor: pointer;--}}
                                                                {{--border: 0;--}}
                                                            {{--}--}}
                                                            {{--.loader {--}}
                                                                {{--margin:0 auto;--}}
                                                                {{--border: 5px solid #fff;--}}
                                                                {{--border-radius: 50%;--}}
                                                                {{--border-top: 5px solid #967adc;--}}
                                                                {{--width: 50px;--}}
                                                                {{--height: 50px;--}}
                                                                {{--margin-bottom: 20px;--}}
                                                                {{---webkit-animation: spin 2s linear infinite; /* Safari */--}}
                                                                {{--animation: spin 2s linear infinite;--}}
                                                            {{--}--}}

                                                            {{--/* Safari */--}}
                                                            {{--@-webkit-keyframes spin {--}}
                                                                {{--0% { -webkit-transform: rotate(0deg); }--}}
                                                                {{--100% { -webkit-transform: rotate(360deg); }--}}
                                                            {{--}--}}

                                                            {{--@keyframes spin {--}}
                                                                {{--0% { transform: rotate(0deg); }--}}
                                                                {{--100% { transform: rotate(360deg); }--}}
                                                            {{--}--}}
                                                        {{--</style>--}}


                                                    {{--</div>--}}
                                                    {{--<div class="modal-footer">--}}

                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}


                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--</div>-->--}}
                {{--</section>--}}

                {{--<script src="{{asset('admin-assets/js/tinymce/tinymce.min.js')}}"></script>--}}
                {{--<script src="{{asset('admin-assets/js/index.js')}}" type="text/javascript"></script>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    {{--<!-- ////////////////////////////////////////////////////////////////////////////-->--}}

    {{--<script>--}}



        {{--var index=18;--}}
        {{--var baseURL= "{{asset('')}}";--}}
        {{--var baseURL2= "{{asset('')}}thumb.php?src=";--}}
        {{--var size= "&size=140x95";--}}
        {{--var count=0;--}}
        {{--var count2=0;--}}

        {{--function openModal() {--}}
            {{--$('#custom').modal("show");--}}
            {{--if(count==0) {--}}
                {{--$('#img_location').empty();--}}
                {{--$.ajax({--}}
                    {{--url: baseURL + '/getImages',--}}
                    {{--method: 'get',--}}
                    {{--data :{--}}
                        {{--offset : 0,--}}
                        {{--txt: $('#search-contacts').val()--}}
                    {{--},--}}
                    {{--dataType: 'json',--}}
                    {{--beforeSend: function(){--}}
                        {{--$('#image').show();--}}
                        {{--$('#load_more_btn').hide();--}}
                    {{--},--}}
                    {{--complete: function(){--}}
                        {{--$('#image').hide();--}}
                    {{--},--}}

                    {{--success: function (response) {--}}

                        {{--var len = response.length;--}}
                        {{--var i = 0;--}}
                        {{--if(len==0){--}}
                            {{--$('#load_more_btn').hide();--}}
                            {{--$('#error_msg').show();--}}

                        {{--}else {--}}
                            {{--if(len<18){--}}
                                {{--$('#load_more_btn').hide();--}}
                                {{--$('#error_msg').hide();--}}
                            {{--}else{--}}
                                {{--$('#load_more_btn').show();--}}
                                {{--$('#error_msg').hide();--}}
                            {{--}--}}
                            {{--while (len > i) {--}}
                                {{--$('#img_location').append(--}}
                                        {{--'<div class="col-md-2">' +--}}
                                        {{--'<div class="card border-grey border-lighten-2">' +--}}
                                        {{--'<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">' +--}}
                                        {{--'<button class="img_use"  link="'+response[i].path+'">إستخدام</button>'+--}}
                                        {{--'<img class="gallery-thumbnail" style="width:140px;height:95px; " src="' + baseURL2 + response[i].path + size +  '" />' +--}}
                                        {{--'</div>' +--}}
                                        {{--'<p class="img-path">' + response[i].path + '</p>' +--}}
                                        {{--'<div class="text-xs-center" style="height: 22px; padding-top: 3px; overflow: hidden">' +--}}
                                        {{--'<span href="" class="use-img" style="font-size: 10px;">' + response[i].name + '</span>' +--}}
                                        {{--'</div>' +--}}
                                        {{--'</div>' +--}}
                                        {{--'</div>'--}}
                                {{--);--}}

                                {{--i++;--}}
                            {{--}--}}
                            {{--count++;--}}
                        {{--}--}}


                    {{--}--}}
                {{--});--}}

            {{--}--}}
        {{--}--}}

        {{--$("#img_location").on('click','.img_use',function (e) {--}}
            {{--e.preventDefault();--}}
            {{--$('#filesToUpload').parent().parent().removeClass('error');--}}
            {{--$('#filesToUpload').next().remove();--}}
            {{--$('#im_ar').val($(this).attr('link'));--}}
            {{--$('#image-select').attr('src',"{{asset('')}}"+$(this).attr('link'));--}}
            {{--$('#custom').modal('hide');--}}
        {{--});--}}


        {{--function load_more() {--}}



            {{--$.ajax({--}}
                {{--url: baseURL + '/getImages',--}}
                {{--method: 'get',--}}
                {{--data :{--}}
                    {{--offset : index,--}}
                    {{--txt: $('#search-contacts').val()--}}
                {{--},--}}
                {{--dataType: 'json',--}}
                {{--beforeSend: function(){--}}
                    {{--$('#image').show();--}}
                    {{--$('#load_more_btn').hide();--}}
                {{--},--}}
                {{--complete: function(){--}}
                    {{--$('#image').hide();--}}
                {{--},--}}
                {{--success: function (response) {--}}

                    {{--var len = response.length;--}}
                    {{--var i = 0;--}}
                    {{--if(len==0){--}}
                        {{--$('#load_more_btn').hide();--}}
                        {{--$('#error_msg').show();--}}
                    {{--}--}}
                    {{--else {--}}
                        {{--if(len<18){--}}
                            {{--$('#load_more_btn').hide();--}}
                            {{--$('#error_msg').hide();--}}
                        {{--}else{--}}
                            {{--$('#load_more_btn').show();--}}
                            {{--$('#error_msg').hide();--}}
                        {{--}--}}
                        {{--while (len > i) {--}}
                            {{--$('#img_location').append(--}}
                                    {{--'<div class="col-md-2">' +--}}
                                    {{--'<div class="card border-grey border-lighten-2">' +--}}
                                    {{--'<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">' +--}}
                                    {{--'<button class="img_use"  link="' + response[i].path + '">إستخدام</button>' +--}}
                                    {{--'<img class="gallery-thumbnail" style="width:140px;height:95px; " src="' + baseURL2 + response[i].path + size +  '" />' +--}}
                                    {{--'</div>' +--}}
                                    {{--'<p class="img-path">' + response[i].path + '</p>' +--}}
                                    {{--'<div class="text-xs-center" style="height: 22px; padding-top: 3px; overflow: hidden">' +--}}
                                    {{--'<span href="" class="use-img" style="font-size: 10px;">' + response[i].name + '</span>' +--}}
                                    {{--'</div>' +--}}
                                    {{--'</div>' +--}}
                                    {{--'</div>'--}}
                            {{--);--}}

                            {{--i++;--}}
                        {{--}--}}
                        {{--index = index + 18;--}}
                    {{--}--}}
                {{--}--}}
            {{--});--}}


        {{--}--}}

        {{--function load_more2() {--}}

            {{--$('#img_location').empty();--}}

            {{--$.ajax({--}}
                {{--url: baseURL + '/getImages',--}}
                {{--method: 'get',--}}
                {{--data :{--}}
                    {{--offset : 0,--}}
                    {{--txt: $('#search-contacts').val()--}}
                {{--},--}}
                {{--dataType: 'json',--}}

                {{--beforeSend: function(){--}}
                    {{--$('#image').show();--}}
                    {{--$('#load_more_btn').hide();--}}
                {{--},--}}
                {{--complete: function(){--}}
                    {{--$('#image').hide();--}}
                {{--},--}}
                {{--success: function (response) {--}}

                    {{--var len = response.length;--}}
                    {{--var i = 0;--}}
                    {{--if (len == 0) {--}}
                        {{--$('#load_more_btn').hide();--}}
                        {{--$('#error_msg').show();--}}
                    {{--} else {--}}
                        {{--if(len<18){--}}
                            {{--$('#load_more_btn').hide();--}}
                            {{--$('#error_msg').hide();--}}
                        {{--}else{--}}
                            {{--$('#load_more_btn').show();--}}
                            {{--$('#error_msg').hide();--}}
                        {{--}--}}
                        {{--while (len > i) {--}}
                            {{--$('#img_location').append(--}}
                                    {{--'<div class="col-md-2">' +--}}
                                    {{--'<div class="card border-grey border-lighten-2">' +--}}
                                    {{--'<div class="card-img-top embed-responsive embed-responsive-item embed-responsive-16by9">' +--}}
                                    {{--'<button class="img_use"  link="' + response[i].path + '">إستخدام</button>' +--}}
                                    {{--'<img class="gallery-thumbnail" style="width:140px;height:95px; " src="' + baseURL2 + response[i].path + size + '" />' +--}}
                                    {{--'</div>' +--}}
                                    {{--'<p class="img-path">' + response[i].path + '</p>' +--}}
                                    {{--'<div class="text-xs-center" style="height: 22px; padding-top: 3px; overflow: hidden">' +--}}
                                    {{--'<span href="" class="use-img" style="font-size: 10px;">' + response[i].name + '</span>' +--}}
                                    {{--'</div>' +--}}
                                    {{--'</div>' +--}}
                                    {{--'</div>'--}}
                            {{--);--}}

                            {{--i++;--}}
                        {{--}--}}


                    {{--}--}}
                {{--}--}}

            {{--});--}}
            {{--index=18;--}}
            {{--count=0;--}}

        {{--}--}}

        {{--$('#search-btn').on( "click", function( event ) {--}}
            {{--event.preventDefault();--}}
            {{--load_more2();--}}

        {{--});--}}

        {{--$('#search-contacts').on( "keydown", function( event ) {--}}
            {{--if ( event.which==13) {--}}
                {{--event.preventDefault();--}}
            {{--}--}}
        {{--});--}}

        {{--$('#search-contacts').on( "keyup",function(e) {--}}

            {{--if ( e.which==13){--}}
                {{--e.preventDefault();--}}
                {{--load_more2();--}}

            {{--}--}}

            {{--return false;--}}
        {{--});--}}



    {{--</script>--}}

{{--@endsection--}}
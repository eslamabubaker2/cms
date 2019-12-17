@extends('cpanel.app')
@section('content')

    <div class="robust-content content container-fluid" xmlns="">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('cpanel/home')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">قائمة الأخبار
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
                <section id="responsive">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="icon-tag"></i> قائمة الأخبار</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="buttons-group btn-add-letter">
                                        <a href="{{asset('cpanel/addnews')}}" class="btn btn-info float-md-right"><i class="icon-plus4"></i> إضافة خبر</a>
                                    </div>
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
                                        <table class="table table-striped table-bordered dataex-fixh-responsive" id="news_data">
                                            <thead>

                                            <th width="1%">رقم</th>
                                            <th width="27%">عنوان الخبر</th>
                                            <th width="10%">القسم</th>
                                            <th width="2%">الزوار</th>
                                            <th width="5%">المستخدم</th>
                                            <th width="25%">تاريخ الإضافة</th>
                                            <th width="10%">العمليات</th>

                                            </thead>
                                            <tbody style="font-size: 12px" id="t_body">

                                            @foreach ($News as $news)

                                            <tr>
                                                <td>{{$news->id }}</td>
                                                <td>{{$news->title }}</td>
                                                <td>{{$news->getCategory()->name }}</td>
                                                <td>{{$news->view_count }}</td>
                                                <td>{{$news->created_by }}</td>
                                                <td>{{$news->created_at }}</td>

                                                <td>

                                                    <a  href="{{asset('cpanel/updatenews').'/'.$news->id}}"><i class="fa fa-pencil info" title="Edit" style="font-size: 20px;"></i></a>
                                                    <a onclick="return openModel('{{$news->id}}');" class="btndelete"><i class="fa fa-trash danger" title="Delete" style="font-size: 20px; margin-right: 10px;"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>

                                            <tfoot>
                                            <tr>
                                                <th>رقم</th>
                                                <th>عنوان الخبر</th>
                                                <th>القسم</th>
                                                <th>الزوار</th>
                                                <th>المستخدم</th>
                                                <th>تاريخ الإضافة</th>
                                                <th>العمليات</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Responsive integration table -->
            </div>
            <!-- Modal -->
            <div class="modal fade text-xs-left" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel1"> حذف خبر  </h4>
                        </div>
                        <form  id="form-delete" method="post" action="{{url('cpanel/deletenews')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa  fa-warning danger " style="font-size: 30px; margin-right: 50px;"></i>
                                    </div>
                                    <input type="hidden" class="form-control" name="deptid" placeholder="" id="deptid2"  >
                                    <div class="form-group" >
                                        <h5 class="col-md-8  control-label" >هل تريد حذف الخبر؟! </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit"  class="btn btn-primary">نعم</button>
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">لا</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div><!--End Modal -->        </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>


    <script>



        function openModel(txt) {

            $('#deptid2').val(txt);
            $('#delete').modal('show');
            return false;
        }




    </script>
@endsection
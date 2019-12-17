<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/bootstrap/css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/open-sans/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/dinnext/styles.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/boraq/style.css')}}">


    <link rel="stylesheet" type="text/css" href="{{ asset('libs/tether/css/tether.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/jscrollpane/jquery.jscrollpane.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/common.min.css')}}">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/themes/primary.min.css')}}">
    <link class="sidebar-dark-style" rel="stylesheet" type="text/css" href="{{ asset('assets/styles/themes/sidebar-black.min.css')}}">
    <!-- END THEME STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/kosmo/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/izi-modal/css/iziModal.min.css')}}"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/libs/izi-modal/izi-modal.min.css')}}"> <!-- Original -->
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/c3js/c3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/noty/noty.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/widgets/panels.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/libs/touchspin/touchspin.min.css')}}">
    @yield('css')
</head>
<!-- END HEAD -->

<body class="navbar-fixed sidebar-sections sidebar-position-fixed page-header-fixed theme-primary page-loading"> <!-- remove page-header-fixed to unfix header -->
<?php
function ArabicDate($date1) {

    $months = array("Jan" => "يناير", "Feb" => "فبراير", "Mar" => "مارس", "Apr" => "أبريل", "May" => "مايو", "Jun" => "يونيو", "Jul" => "يوليو", "Aug" => "أغسطس", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر");
    $your_date = date('y-m-d h:i  a',strtotime($date1)); // The Current Date

    $en_month = date("M", strtotime($your_date));
    foreach ($months as $en => $ar) {
        if ($en == $en_month) { $ar_month = $ar; }
    }

    $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
    $replace = array ("السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
    $ar_day_format = date('D',strtotime($your_date)); // The Current Day
    $ar_day = str_replace($find, $replace, $ar_day_format);

    $find1 = array ("am", "pm");
    $replace1 = array ("ص", "م");
    $ar_day_format1 = date('a',strtotime($date1)); // The Current Day
    $ar_day1 = str_replace($find1, $replace1, $ar_day_format1);

    header('Content-Type: text/html; charset=utf-8');
    $standard = array("0","1","2","3","4","5","6","7","8","9");
    $eastern_arabic_symbols = array("0","1","2","3","4","5","6","7","8","9");
    $current_date = date('h:i ',strtotime($your_date)) . $ar_day1 .' - ' .$ar_day.' '.date('d',strtotime($your_date)).' / '.$ar_month.' / '.date('Y',strtotime($your_date));
    $data = str_replace($standard , $eastern_arabic_symbols , $current_date);

    return $data;
}
?>
<!-- BEGIN HEADER -->
<nav class="navbar navbar">
    <!-- BEGIN HEADER INNER -->
    <!-- BEGIN LOGO -->
    <div href="index.html" class="navbar-brand">
        <!-- BEGIN RESPONSIVE SIDEBAR TOGGLER -->
        <a href="#" class="sidebar-toggle"><i class="icon la la-bars" aria-hidden="true"></i></a>
        <a href="#" class="sidebar-mobile-toggle"><i class="icon la la-bars" aria-hidden="true"></i></a>
        <!-- END RESPONSIVE SIDEBAR TOGGLER -->

        <div class="navbar-logo">
            <a href="{{url('/')}}" class="logo">Al-Boraq CMS</a>

            <span class="nav-item dropdown dropdown-grid-images">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu info scrollable" aria-labelledby="Preview" data-height="260">
                    <div class="scroll-wrapper">
                        <a href="#" class="grid-item">
                            <img class="icon" src="{{asset('assets/img/menu-grid/dashboard.png')}}">
                            <span class="text">الرئيسية</span>
                        </a>
                        <a href="#" class="grid-item">
                            <img class="icon" src="{{asset('assets/img/menu-grid/flask.png')}}">
                            <span class="text">Projects</span>
                        </a>
                        <a href="#" class="grid-item">
                            <img class="icon" src="{{asset('assets/img/menu-grid/calendar.png')}}">
                            <span class="text">Calendar</span>
                        </a>
                        <a href="#" class="grid-item">
                            <img class="icon" src="{{asset('assets/img/menu-grid/profile.png')}}">
                            <span class="text">Profile</span>
                        </a>
                        <a href="#" class="grid-item">
                            <img class="icon" src="{{asset('assets/img/menu-grid/ticket.png')}}">
                            <span class="text">Tickets</span>
                        </a>
                        <a href="#" class="grid-item">
                            <img class="icon" src="{{asset('assets/img/menu-grid/settings.png')}}">
                            <span class="text">Settings</span>
                        </a>
                    </div>
                </div>
            </span>

            <!-- END GRID NAVIGATION -->
        </div>
    </div>
    <!-- END LOGO -->

    <!-- BEGIN MENUS -->
    <div class="wrapper">
        <nav class="nav navbar-nav">
            <!-- BEGIN NAVBAR MENU -->
            <div class="navbar-menu">
                <form class="search-form">
                    <a class="search-open" href="#">
                        <span class="la la-search"></span>
                    </a>
                    <div class="wrapper">
                        <div class="input-icon icon-right icon icon-lg icon-color-primary">
                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="بحث...">
                            <span class="icon-addon">
                                <span class="la la-search icon"></span>
                            </span>
                        </div>
                        <a class="search-close" href="#">
                            <span class="la la-close"></span>
                        </a>
                    </div>
                </form>
                <a class="nav-item nav-link" href="{{url('/')}}">الرئيسية</a>
                <a class="nav-item nav-link" href="{{url('/addnews')}}">خبر جديد</a>
                <a class="nav-item nav-link" href="{{url('/addalbum')}}">إنشاء ألبوم صور</a>
                <a class="nav-item nav-link" href="{{url('/addvideo')}}">إضافة فيديو</a>
                <div class="nav-item nav-link btn-action">
                    <a class="btn btn-info btn-live" href="#.">  <i>  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18">
                                <g fill="#FFFFFF" fill-rule="evenodd">
                                    <ellipse cx="12" cy="8.705" rx="3" ry="3"/>
                                    <path id="on-air-out" d="M3.51471863.219669914C-1.17157288 4.90596141-1.17157288 12.5039412 3.51471863 17.1902327 3.80761184 17.4831259 4.28248558 17.4831259 4.5753788 17.1902327 4.86827202 16.8973394 4.86827202 16.4224657 4.5753788 16.1295725.474873734 12.0290674.474873734 5.38083515 4.5753788 1.28033009 4.86827202.987436867 4.86827202.512563133 4.5753788.219669914 4.28248558-.0732233047 3.80761184-.0732233047 3.51471863.219669914zM20.4852814 17.1902327C25.1715729 12.5039412 25.1715729 4.90596141 20.4852814.219669914 20.1923882-.0732233047 19.7175144-.0732233047 19.4246212.219669914 19.131728.512563133 19.131728.987436867 19.4246212 1.28033009 23.5251263 5.38083515 23.5251263 12.0290674 19.4246212 16.1295725 19.131728 16.4224657 19.131728 16.8973394 19.4246212 17.1902327 19.7175144 17.4831259 20.1923882 17.4831259 20.4852814 17.1902327z"/>
                                    <path id="on-air-in" d="M17.3033009 14.0082521C18.7217837 12.5897693 19.4928584 10.6983839 19.4999509 8.73215792 19.507111 6.74721082 18.7352286 4.8335782 17.3033009 3.40165043 17.0104076 3.10875721 16.5355339 3.10875721 16.2426407 3.40165043 15.9497475 3.69454365 15.9497475 4.16941738 16.2426407 4.4623106 17.3890249 5.6086948 18.0056933 7.13752465 17.9999607 8.72674718 17.9942823 10.30094 17.3782748 11.8119579 16.2426407 12.947592 15.9497475 13.2404852 15.9497475 13.7153589 16.2426407 14.0082521 16.5355339 14.3011454 17.0104076 14.3011454 17.3033009 14.0082521zM6.69669914 3.40165043C3.76776695 6.33058262 3.76776695 11.07932 6.69669914 14.0082521 6.98959236 14.3011454 7.46446609 14.3011454 7.75735931 14.0082521 8.05025253 13.7153589 8.05025253 13.2404852 7.75735931 12.947592 5.41421356 10.6044462 5.41421356 6.80545635 7.75735931 4.4623106 8.05025253 4.16941738 8.05025253 3.69454365 7.75735931 3.40165043 7.46446609 3.10875721 6.98959236 3.10875721 6.69669914 3.40165043z"/>
                                </g>
                            </svg>

                        </i> <span>بث مباشر</span> </a>
                </div>
            </div>
            <!-- END NAVBAR MENU -->

            <!-- BEGIN NAVBAR ACTIONS -->
            <div class="navbar-actions">
                <!-- BEGIN NAVBAR ACTION BUTTON -->
                <div class="nav-item nav-link btn-action-block">
                    <button class="btn btn-danger izi-modal-trigger" data-target="#izi-modal-danger">
                        <span class="action"><i style="font-size: 20px" class="icon la la-fire"></i> خبر عاجل</span>
                    </button>
                </div>
                <!-- END NAVBAR ACTION BUTTON -->

                <!-- BEGIN NAVBAR MESSAGES -->
                <div class="nav-item dropdown messages">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-envelope icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">3</span>
                        </span>
                        <span class="text">Messages</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Preview">
                        <section class="tabs-actions">
                            <a href="#"><i class="la la-plus icon"></i></a>
                            <a href="#"><i class="la la-search icon"></i></a>
                        </section>
                        <ul class="nav nav-tabs nav-tabs info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#navbar-messages-inbox" role="tab">Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-messages-sent" role="tab">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-messages-archive" role="tab">Archive</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane messages-tab active" id="navbar-messages-inbox" role="tabpanel">
                                <div class="wrapper scrollable">
                                    <a href="#" class="message">
                                        <div class="avatar online">
                                            <img src="{{asset('assets/img/avatars/avatar-1.jpg')}}" width="36" height="36">
                                        </div>
                                        <div class="info">
                                            <div class="user-name">Emily Carter</div>
                                            <div class="text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="message">
                                        <div class="avatar online">
                                            <img src="{{asset('assets/img/avatars/avatar-5.jpg')}}" width="36" height="36">
                                        </div>
                                        <div class="info">
                                            <div class="user-name">Emily Carter</div>
                                            <div class="text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="message">
                                        <div class="avatar offline">
                                            <img src="{{asset('assets/img/avatars/placeholders/ava-36.png')}}" width="36" height="36">
                                        </div>
                                        <div class="info">
                                            <div class="user-name">Emily Carter</div>
                                            <div class="text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="message">
                                        <div class="avatar offline">
                                            <img src="{{asset('assets/img/avatars/avatar-4.jpg')}}" width="36" height="36">
                                        </div>
                                        <div class="info">
                                            <div class="user-name">Emily Carter</div>
                                            <div class="text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="view-all">
                                    <a href="#">View all</a>
                                </div>
                            </div>
                            <div class="tab-pane empty" id="navbar-messages-sent" role="tabpanel">
                                There are no messages.
                            </div>
                            <div class="tab-pane empty" id="navbar-messages-archive" role="tabpanel">
                                There are no messages.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR MESSAGES -->

                <!-- BEGIN NAVBAR NOTIFICATIONS -->
                <div class="nav-item dropdown notifications">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-bell icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">7</span>
                        </span>
                        <span class="text">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Preview">
                        <ul class="nav nav-tabs nav-tabs info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#navbar-notifications-all" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-activity" role="tab">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-comments" role="tab">Comments</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane notifications-tab active" id="navbar-notifications-all" role="tabpanel">
                                <div class="wrapper scrollable">
                                    <a href="#" class="notification">
                                        <div class="avatar">
                                            <img src="{{asset('assets/img/avatars/avatar-3.jpg')}}" width="36" height="36">
                                        </div>
                                        <div class="info">
                                            <div class="user-name">Emily Carter <span class="description">has uploaded 1 file</span></div>
                                            <div class="text"><span class="la la-file-text-o icon"></span> logo vector doc</div>
                                            <div class="datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="notification">
                                        <div class="action">
                                            <span class="default">
                                                <span class="la la-briefcase icon"></span>
                                            </span>
                                        </div>
                                        <div class="info">
                                            <div class="user-name">New project created</div>
                                            <div class="text">Dashboard UI</div>
                                            <div class="datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="notification">
                                        <div class="action">
                                            <span class="error">
                                                <span class="la la-times-circle icon"></span>
                                            </span>
                                        </div>
                                        <div class="info">
                                            <div class="user-name">File upload error</div>
                                            <div class="text"><span class="la la-file-text-o icon"></span> logo vector doc</div>
                                            <div class="datetime">10 minutes ago</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="view-all">
                                    <a href="#">Show more</a>
                                </div>
                            </div>
                            <div class="tab-pane empty" id="navbar-notifications-activity" role="tabpanel">
                                There are no activities.
                            </div>
                            <div class="tab-pane empty" id="navbar-notifications-comments" role="tabpanel">
                                There are no comments.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR NOTIFICATIONS -->

                <!-- BEGIN NAVBAR USER -->
                <div class="nav-item dropdown user">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar">
                            <img src="{{asset('assets/img/avatars/avatar-13.jpg')}}" width="36" height="36">
                        </span>
                        <span class="info">
                            <span class="name"> {{Auth::user()->name}}</span>
                            <span class="description"> مدير</span>
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="Preview">
                        <a class="dropdown-item" href="#">
                            <span class="la la-user icon"></span>
                            <span>الصفحة الشخصية</span>
                        </a>
                        <a class="dropdown-item" href="{{asset('cpanel/updateInformation/')}}">
                            <span class="la la-wrench icon" aria-hidden="true"></span>
                            <span> تعديل بياناتي</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-question-circle icon" aria-hidden="true"></span>
                            <span>مساعدة</span>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="la la-sign-out icon" aria-hidden="true"></span>
                            <span> تسجيل الخروج
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></span>
                        </a>
                    </div>
                </div>
                <!-- END NAVBAR USER -->
            </div>
            <!-- END NAVBAR ACTIONS -->
        </nav>

        <!-- BEGIN NAVBAR ACTIONS TOGGLER -->
        <nav class="nav navbar-nav navbar-actions-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-ellipsis-h icon open"></span>
                <span class="la la-close icon close"></span>
            </a>
        </nav>
        <!-- END NAVBAR ACTIONS TOGGLER -->

        <!-- BEGIN NAVBAR MENU TOGGLER -->
        <nav class="nav navbar-nav navbar-menu-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-th icon open"></span>
                <span class="la la-close icon close"></span>
            </a>
        </nav>
        <!-- END NAVBAR MENU TOGGLER -->
    </div>
    <!-- END MENUS -->
    <!-- END HEADER INNER -->
</nav>
<!-- END HEADER -->






<div class="page-container dashboard-tabbed-sidebar-fixed-tabs">









    <!-- BEGIN DEFAULT SIDEBAR -->
    <div class="column sidebar info">
        <div class="wrapper">
            <section>
                {{--<h5 class="header">Main</h5>--}}
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">
                            <span class="icon la la-home"></span>
                            <span>الرئيسية</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-newspaper-o"></span>
                            <span>الأخبار</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" style="border-bottom:1px solid #434950 !important;" href="{{url('/addnews')}}">خبر جديد</a>
                            <a class="dropdown-item" href="{{url('/news')}}">أرشيف الأخبار</a>
                            <a class="dropdown-item" style="border-bottom:1px solid #434950 !important;" href="{{url('/add-post')}}">أخبار اليوم</a>
                            <a class="dropdown-item" href="{{url('/add-post')}}">أخبار منشورة على الموقع</a>
                            <a class="dropdown-item" style="border-bottom:1px solid #434950 !important;" href="{{url('/add-post')}}">أخبار محفوظة كمسودة</a>
                            <a class="dropdown-item" style="border-bottom:1px solid #434950 !important;" href="{{url('/add-post')}}">سلة المهملات</a>
                            <a class="dropdown-item" href="{{url('/add-post')}}">تصنيف جديد</a>
                            <a class="dropdown-item" href="{{url('/add-post')}}">التصنيفات الرئيسية</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-fire"></span>
                            <span>أخبار عاجلة</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" style="border-bottom:1px solid #434950 !important;" href="{{url('/addbreaknews')}}">خبر عاجل جديد</a>
                            <a class="dropdown-item" href="{{url('/breaknews')}}">أرشيف الأخبار العاجلة</a>
                        </div>
                    </li>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-photo"></span>
                            <span>الوسائط المتعددة</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>ألبومات الصور</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="filemanager-grid.html">ألبوم صور جديد</a>
                                    <a class="dropdown-item" href="filemanager-grid-selected-items.html">أرشيف الألبومات</a>
                                    <a class="dropdown-item" href="filemanager-grid-image.html">سلة المهملات</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>قائمة الفيديو</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="filemanager-list.html">فيديو جديد</a>
                                    <a class="dropdown-item" href="filemanager-list-selected-items.html">أرشيف الفيديو</a>
                                    <a class="dropdown-item" href="filemanager-list-recent.html">سلة المهملات</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>الإنفوجرافيك</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="document-viewer-image.html">إنفوجرافيك جديد</a>
                                    <a class="dropdown-item" href="document-viewer-pdf.html">أرشيف الإنفوجرافيك</a>
                                    <a class="dropdown-item" href="document-viewer-presentation.html">سلة المهملات</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>الكاريكاتير</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="filemanager-list.html">كاريكاتير جديد</a>
                                    <a class="dropdown-item" href="filemanager-list-selected-items.html">أرشيف الكاريكاتير</a>
                                    <a class="dropdown-item" href="filemanager-list-recent.html">سلة المهملات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>
            <section>
                {{--<h5 class="header">Applications</h5>--}}
                <ul class="nav nav-pills nav-stacked">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-flask"></span>
                            <span>CRM</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="crm-contacts.html">Contacts</a>
                            <a class="dropdown-item" href="crm-user-contact-view.html">User Contact View</a>
                            <a class="dropdown-item" href="crm-users-list-view.html">Users List View</a>
                            <a class="dropdown-item" href="crm-users-grid-view.html">Users Grid View</a>
                            <a class="dropdown-item" href="crm-roles-and-permissions.html">Roles &amp; Permissions</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-flask"></span>
                            <span>Projects</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="projects-kanban-board.html">Kanban Board</a>
                            <a class="dropdown-item" href="projects-grid-board.html">Grid Board</a>
                            <a class="dropdown-item" href="projects-tasks.html">Tasks</a>
                            <a class="dropdown-item" href="projects-task.html">Task</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-envelope-o"></span>
                            <span>Mail</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="mail-empty.html">Mail Empty</a>
                            <a class="dropdown-item" href="mail-view.html">Mail View</a>
                            <a class="dropdown-item" href="mail-create.html">Mail Create</a>
                            <a class="dropdown-item" href="mail-compact.html">Mail Compact</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-ticket"></span>
                            <span>Tickets</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="tickets-empty.html">Empty</a>
                            <a class="dropdown-item" href="tickets-list.html">List</a>
                            <a class="dropdown-item" href="tickets-create.html">Create</a>
                            <a class="dropdown-item" href="tickets-view.html">View</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-comments-o"></span>
                            <span>Messenger</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="messenger.html">Default</a>
                            <a class="dropdown-item" href="messenger-group.html">Group</a>
                        </div>
                    </div>


                    <li class="nav-item">
                        <a class="nav-link" href="music-app.html">
                            <span class="icon la la-music"></span>
                            <span>Music</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendar.html">
                            <span class="icon la la-calendar-o"></span>
                            <span>Calendar</span>
                        </a>
                    </li>
                </ul>
            </section>

            <section>
                <h5 class="header">Interface</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-toggle-off"></span>
                            <span>Form</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="form-basic-inputs.html">Basic Inputs</a>
                            <a class="dropdown-item" href="form-advanced-inputs.html">Extended Inputs</a>
                            <a class="dropdown-item" href="form-buttons.html">Buttons</a>
                            <a class="dropdown-item" href="form-validation.html">Validation</a>
                            <a class="dropdown-item" href="form-touchspin.html">Touchspin</a>
                            <a class="dropdown-item" href="form-flex-labels.html">Flex Labels</a>
                            <a class="dropdown-item" href="form-mask-input.html">Mask Input</a>
                            <a class="dropdown-item" href="form-autocomplete-and-tags.html">Autocomplete &amp; Tags</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>Steps</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="form-steps-column.html">Column Steps</a>
                                    <a class="dropdown-item" href="form-steps-progress.html">Progress Steps</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-desktop"></span>
                            <span>UI Kit</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="uikit-bootstrap-ui.html">Bootstrap UI</a>
                            <a class="dropdown-item" href="uikit-colors.html">Colors</a>
                            <a class="dropdown-item" href="uikit-typography.html">Typography</a>
                            <a class="dropdown-item" href="uikit-cards.html">Cards</a>
                            <a class="dropdown-item" href="uikit-panels.html">Panels</a>
                            <a class="dropdown-item" href="uikit-tables.html">Tables</a>
                            <a class="dropdown-item" href="uikit-tabs.html">Tabs</a>
                            <a class="dropdown-item" href="uikit-default-alerts.html">Alerts</a>
                            <a class="dropdown-item" href="uikit-pagination.html">Pagination</a>
                            <a class="dropdown-item" href="uikit-modal.html">Modal</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-puzzle-piece"><span class="badge badge-pill badge-pink label">3</span></span>
                            <span>Widgets</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="widgets-panels.html">Panels</a>
                            <a class="dropdown-item" href="widgets-upload.html">Upload</a>
                            <a class="dropdown-item" href="widgets-tables.html">Tables</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-server"></span>
                            <span>Components</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="components-file-upload.html">File Upload</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>Select</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="components-select-select2.html">Select2</a>
                                    <a class="dropdown-item" href="components-select-multi.html">Multi</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>Wysiwyg Editors</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="components-wysiwyg-editors-bootstrap-markdown-editor.html">Bootstrap Markdown</a>
                                    <a class="dropdown-item" href="components-wysiwyg-editors-simplemde-markdown-editor.html">SimpleMDE Markdown</a>
                                    <a class="dropdown-item" href="components-wysiwyg-editors-trumbowyg-editor.html">Trumbowyg Editor</a>
                                    <a class="dropdown-item" href="components-wysiwyg-editors-summernote-editor.html">Summernote Editor</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="components-alerts-and-confirm.html">Alerts &amp; Confirm</a>
                            <a class="dropdown-item" href="components-sweetalert.html">SweetAlert</a>
                            <a class="dropdown-item" href="components-bootstrap-notify.html">Bootstrap Notify</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>DatePicker</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="components-datepicker-flatpickr.html">Flatpickr</a>
                                    <a class="dropdown-item" href="components-datepicker-bootstrap-date-range-picker.html">Range DatePicker</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="components-ion-range-slider-flat-skin-basic.html">Ion Range Slider</a>
                            <a class="dropdown-item" href="components-nestable.html">Nestable</a>
                            <a class="dropdown-item" href="components-colorpicker.html">Color Picker</a>
                        </div>
                    </li>
                </ul>
            </section>

            <section>
                <h5 class="header">Datatables</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item">
                        <a class="nav-link" href="datatables-datatables-net.html">
                            <span class="icon la la-table"></span>
                            <span>DataTables.net</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datatables-bootstrap-table.html">
                            <span class="icon la la-th"></span>
                            <span>Bootstrap Table</span>
                        </a>
                    </li>
                </ul>
            </section>

            <section>
                <h5 class="header">Other</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-file-text-o"></span>
                            <span>Pages</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="pages-blank.html">Blank</a>
                            <a class="dropdown-item" href="pages-error404.html">Error 404</a>
                            <a class="dropdown-item" href="pages-error500.html">Error 500</a>
                            <a class="dropdown-item" href="pages-contacts.html">Contacts</a>
                            <a class="dropdown-item" href="pages-login.html" target="_blank">Login</a>
                            <a class="dropdown-item" href="pages-signup.html" target="_blank">Sign Up</a>
                            <a class="dropdown-item" href="pages-forgot-password.html" target="_blank">Forgot Password</a>
                            <a class="dropdown-item" href="pages-locked-account.html" target="_blank">Locked Account</a>
                            <a class="dropdown-item" href="pages-confirmation.html" target="_blank">Confirmation</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-money"></span>
                            <span>Payment</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="payment-billing.html">Billing</a>
                            <a class="dropdown-item" href="payment-invoices.html">Invoices</a>
                            <a class="dropdown-item" href="payment-order.html">Order</a>
                            <a class="dropdown-item" href="payment-orders-history.html">Orders History</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="icon la la-usd"></span>
                            <span>Pricing</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="pricing-plans.html">Plans</a>
                            <a class="dropdown-item" href="pricing-subscriptions.html">Subscriptions</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="email-templates.html">
                            <span class="icon la la-envelope-o"></span>
                            <span>Email Templates</span>
                        </a>
                    </li>
                </ul>
            </section>

            <section>
                <h5 class="header">Help</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item">
                        <a class="nav-link" href="documentation.html">
                            <span class="icon la la-book"></span>
                            <span>Documentation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="faq.html">
                            <span class="icon la la-question-circle"></span>
                            <span>FAQ</span>
                        </a>
                    </li>
                </ul>
            </section>

            <div class="sidebar-extras-block">
                <div class="extras-block-item">
                    <div class="name">Monthly Badwidth Transfer</div>
                    <div class="progress">
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 84%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="description">
                        <span class="amount">84%</span>
                        <span class="text">(8 400 MB of 10 000)</span>
                    </div>
                </div>
                <div class="extras-block-item">
                    <div class="name">Disk Space Usage</div>
                    <div class="progress">
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 36%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="description">
                        <span class="amount">36%</span>
                        <span class="text">(3 600 MB of 10 000)</span>
                    </div>
                </div>
                <div class="sidebar-copyright">© 2016 Kosmo. All right reserved</div>
            </div>
        </div>
    </div>
    <!-- END DEFAULT SIDEBAR -->

    @yield('content')


</div>


<!--brecking modal-->
<div id="izi-modal-danger"
     class="izi-modal"
     data-iziModal-fullscreen="true"
     data-iziModal-title="خبر عاجل"
     data-iziModal-icon="la la-fire"
     data-iziModal-padding="20"
     data-iziModal-autoopen="false"
     data-iziModal-headercolor="#ec644b">
    <form class="has-validation-callback">
        <div class="form-group">
            <label>نص الخبر</label>
            <textarea rows="3" id="" placeholder="نص الخبر.. " class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>فترة الظهور</label>
            <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="touchspin-vertical-buttons" placeholder="ادخل زمن الظهور بالدقائق" type="text" value="" class="form-control touchspin-default" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span></div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">نشر الخبر</button>
            <button class="btn btn-primary-outline light" data-izimodal-close >إلغاء الأمر</button>
        </div>
    </form>
</div>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('libs/responsejs/response.min.js')}}"></script>
<script src="{{ asset('libs/loading-overlay/loadingoverlay.min.js')}}"></script>
<script src="{{ asset('libs/tether/js/tether.min.js')}}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('libs/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
<script src="{{ asset('libs/jscrollpane/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('libs/flexibility/flexibility.js')}}"></script>
<script src="{{ asset('libs/noty/noty.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('assets/scripts/common.min.js')}}"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script src="{{ asset('libs/c3js/c3.min.js')}}"></script>
<script src="{{ asset('libs/noty/noty.min.js')}}"></script>
<script src="{{ asset('libs/izi-modal/js/iziModal.min.js')}}"></script>
<script src="{{ asset('libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

<script>
    $('#izi-modal-danger').iziModal();
    $('.izi-modal-trigger').on('click', function (e) {
        $($(this).data('target')).iziModal('open');
    });
    (function ($) {
        $(document).ready(function() {
            $('#touchspin-vertical-buttons').TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'la la-plus',
                verticaldownclass: 'la la-minus',
                min: 1,
                max: 30
            });

            $('#touchspin-button').TouchSpin({
                postfix: "button",
                postfix_extraclass: "btn btn-default"

            });
        });
    })(jQuery);
</script>


@yield('js')

<div class="mobile-overlay"></div>

<!-- BEGIN SETTINGS BLOCK -->
{{--<div class="settings-slide-block">--}}
{{--<a class="settings-slide-control">--}}
{{--<span class="icon la la-cog"></span>--}}
{{--</a>--}}

{{--<div class="header">--}}
{{--<span class="text">Layout Options</span>--}}
{{--<a class="settings-slide-close-control">--}}
{{--<span class="icon la la-close"></span>--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="themes-list">--}}
{{--<a href="../sidebar_sections-primary/index.html" class="theme primary active"></a>--}}
{{--<a href="../sidebar_sections-primary-dark/index.html" class="theme dark-primary"></a>--}}
{{--<a href="../sidebar_sections-info/index.html" class="theme info"></a>--}}
{{--<a href="../sidebar_sections-pink/index.html" class="theme blink-pink-san-marino"></a>--}}
{{--<a href="../sidebar_sections-bermuda-gray/index.html" class="theme bermuda-gray-malachite"></a>--}}
{{--<a href="../sidebar_sections-royal-blue/index.html" class="theme royal-blue-orchid"></a>--}}
{{--<a href="../sidebar_sections-ebony-clay/index.html" class="theme ebony-clay-cerise-red"></a>--}}
{{--<a href="../sidebar_sections-international-klein-blue/index.html" class="theme international-klein-blue-dixie"></a>--}}
{{--<a href="../sidebar_sections-jungle-green/index.html" class="theme jungle-green-chambray"></a>--}}
{{--<a href="../sidebar_sections-voodoo/index.html" class="theme voodoo-medium-purple"></a>--}}
{{--<a href="../sidebar_sections-cornflower-blue/index.html" class="theme cornflower-blue-ecstasy"></a>--}}
{{--<a href="../sidebar_sections-purple/index.html" class="theme purple-mandy"></a>--}}
{{--<a href="../sidebar_sections-oslo-gray/index.html" class="theme oslo-gray-royal-blue"></a>--}}
{{--<a href="../sidebar_sections-astronaut-blue/index.html" class="theme astronaut-blue-persian-green"></a>--}}
{{--<a href="../sidebar_sections-old-brick/index.html" class="theme old-brick"></a>--}}
{{--<a href="../sidebar_sections-white/index.html" class="theme white"></a>--}}
{{--</div>--}}

{{--<ul class="settings-list">--}}
{{--<li>--}}
{{--<span class="text">Collapsed Sidebar</span>--}}
{{--<label class="checkbox-slider on-off primary sidebar-checkbox-toggle">--}}
{{--<input type="checkbox" value="1">--}}
{{--<span class="indicator"></span>--}}
{{--<span class="on">On</span>--}}
{{--<span class="off">Off</span>--}}
{{--</label>--}}
{{--</li>--}}
{{--<li>--}}
{{--<span class="text">Fixed page header</span>--}}
{{--<label class="checkbox-slider on-off primary page-header-checkbox-toggle">--}}
{{--<input type="checkbox" value="0" checked>--}}
{{--<span class="indicator"></span>--}}
{{--<span class="on">On</span>--}}
{{--<span class="off">Off</span>--}}
{{--</label>--}}
{{--</li>--}}
{{--<li>--}}
{{--<span class="text">Dark/Light Sidebar</span>--}}
{{--<label class="checkbox-slider on-off primary sidebar-style-checkbox-toggle">--}}
{{--<input type="checkbox" value="0" checked>--}}
{{--<span class="indicator"></span>--}}
{{--<span class="on">On</span>--}}
{{--<span class="off">Off</span>--}}
{{--</label>--}}
{{--</li>--}}
{{--<li>--}}
{{--<span class="text">White/Gray Content Background</span>--}}
{{--<label class="checkbox-slider on-off primary content-bg-checkbox-toggle">--}}
{{--<input type="checkbox" value="0" checked>--}}
{{--<span class="indicator"></span>--}}
{{--<span class="on">On</span>--}}
{{--<span class="off">Off</span>--}}
{{--</label>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
<!-- END SETTINGS BLOCK -->
</body>
</html>


    <!-- / main menu header-->
    <!-- main menu content-->

     {{--<div class="main-menu-content">--}}
        {{--<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">--}}
            {{--<li class=" nav-item"><a href=" {{asset('cpanel/home')}} "><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">الرئيسية</span></a>--}}

            {{--</li>--}}
   {{----}}
            {{--<li class=" nav-item"><a href="#"><i class="icon-note"></i><span data-i18n="nav.templates.main" class="menu-title">الأخبار </span></a>--}}


                {{--<ul class="menu-content">--}}
                    {{--<li><a href=" {{asset('cpanel/news')}} " data-i18n="nav.templates.vert.classic_menu" class="menu-item">قائمة الأخبار</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="{{asset('cpanel/addnews')}}" data-i18n="nav.templates.vert.compact_menu" class="menu-item">إضافة خبر</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">الخبر العاجل</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a href="{{asset('cpanel/breaknews')}}" data-i18n="nav.templates.vert.content_menu" class="menu-item">قائمة الأخبار العاجلة</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{asset('cpanel/addbreaknews')}}" data-i18n="nav.templates.vert.content_menu" class="menu-item">إضافة خبر عاجل</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}



            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title"> تصنيف الأخبار</span></a>--}}
                {{--<ul class="menu-content">--}}


                    {{--<li><a href=" {{asset('cpanel/maindept')}}" data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar" class="menu-item">إضافة قسم رئيسي</a>--}}
                    {{--</li>--}}
                    {{--<li><a href=" {{asset('cpanel/addsubdept')}}" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة قسم فرعي</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="icon-note"></i><span data-i18n="nav.templates.main" class="menu-title"> التعليقات</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a href=" {{asset('cpanel/comments')}}" data-i18n="nav.horz_nav.horizontal_nav_mega_menu" class="menu-item">قائمة التعليقات</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}


            {{--</li>--}}
          {{----}}
            {{--<li class=" nav-item"><a href="#"><i class="icon-navicon2"></i><span data-i18n="nav.navbars.main" class="menu-title">الوسائط المتعددة</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">الصور</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a href=" {{asset('cpanel/albums')}}" data-i18n="nav.page_layouts.3_columns.left_sidebar" class="menu-item">إدارة الصور</a>--}}
                            {{--</li>--}}
                            {{--<li><a href=" {{asset('cpanel/addalbum')}}" data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar" class="menu-item">إضافة صور</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#" data-i18n="nav.page_layouts.3_columns_detached.main" class="menu-item">الفيديو</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a href=" {{asset('cpanel/videos')}}" data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar" class="menu-item">إدارة الفيديو</a>--}}
                            {{--</li>--}}
                            {{--<li><a href=" {{asset('cpanel/addvideo')}}" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة فيديو</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#" data-i18n="nav.page_layouts.3_columns_detached.main" class="menu-item">PDF</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a href=" {{asset('cpanel/pdf')}}" data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar" class="menu-item">إدارة أعداد الصحيفة</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{asset('cpanel/addpdf')}}" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة عدد</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">انفوجرافيك</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a href=" {{asset('cpanel/infographics')}}" data-i18n="nav.page_layouts.3_columns.left_sidebar" class="menu-item">إدارة الانفوجرافيك</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{asset('cpanel/addinfographic')}}" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">إضافة انفوجرافيك</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="icon-panorama_vertical"></i><span data-i18n="nav.vertical_nav.main" class="menu-title">تصنيف الوسائط</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a href=" {{asset('cpanel/addmediadept')}} " data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">إضافة قسم وسائط</a>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class=" nav-item"><a href="#"><i class="icon-panorama_horizontal"></i><span data-i18n="nav.horz_nav.main" class="menu-title">الإعلانات</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a href=" {{asset('cpanel/ads')}}" data-i18n="nav.horz_nav.horizontal_nav_mega_menu" class="menu-item">قائمة الإعلانات</a>--}}
                    {{--</li>--}}
                    {{--<li><a href=" {{asset('cpanel/addads')}}" data-i18n="nav.horz_nav.horizontal_nav_fixed" class="menu-item">إضافة إعلان</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li class=" nav-item"><a href="#"><i class="icon-head"></i><span data-i18n="nav.page_headers.main" class="menu-title">المستخدمين</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a href=" {{asset('cpanel/users')}}" data-i18n="nav.page_headers.headers_breadcrumbs_basic" class="menu-item">قائمة المستخدمين</a>--}}
                    {{--</li>--}}
                    {{--<li><a href=" {{asset('cpanel/adduser')}}" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">إضافة مستخدم</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li class=" nav-item"><a href="#"><i class="icon-cog3"></i><span data-i18n="nav.footers.main" class="menu-title">ثوابت النظام</span></a>--}}
                {{--<ul class="menu-content">--}}

                    {{--<li><a href=" {{asset('cpanel/aboutus')}} " data-i18n="nav.footers.footer_dark" class="menu-item">الإعدادات</a>--}}
                    {{--</li>--}}

                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    <!-- /main menu content-->
    <!-- main menu footer-->

    <!-- main menu footer-->
</div>
<!-- / main menu-->



<!-- ////////////////////////////////////////////////////////////////////////////-->

















<!-- ////////////////////////////////////////////////////////////////////////////-->

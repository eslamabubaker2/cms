@extends('cpanel.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/weather/css/weather-icons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/widgets/payment.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/dashboard/tabbed-sidebar.min.css')}}">
@stop

@section('content')
    <div class="column page">
        <div class="header">
            <section class="title-and-subtitle">
                <div class="title-block">
                    <h3 class="main-title">الرئيسية</h3>
                    <div class="sub-title">لوحة القيادة </div>
                </div>
                <button class="btn btn-secondary-outline light no-text tabbed-sidebar-navigation-block-toggle" data-block-toggle=".dashboard-tabbed-sidebar-sidebar">
                    <span class="icon la la-bars"></span>
                </button>
            </section>
        </div>

        <div class="content">
            <div class="body">
                <div class="dashboard-tabbed-sidebar">
                    <div class="dashboard-tabbed-sidebar-widgets">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card widget-payment-simple-amount-item purple">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="icon-combo-chart icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="amount">$9.24</span>
                                            <span class="amount-icon icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Total Profit <span class="progress-type">(+$1.89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card widget-payment-simple-amount-item green">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-pie-chart icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="amount">$2.190</span>
                                            <span class="amount-icon icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Total Revenue <span class="progress-type">(+$1.89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card widget-payment-simple-amount-item pink">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="icon-user icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="amount">23</span>
                                            <span class="amount-icon icon-circled-down-left"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Active Clients <span class="progress-type">(+$1.89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card widget-payment-simple-amount-item orange">
                                    <div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-area-chart icon"></span>
                                    </div>

                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="amount">$431.2</span>
                                            <span class="amount-icon icon-circled-up-right"></span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Average Profit <span class="progress-type">(+$1.89)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-widget widget-payment-card-rate-details">
                                    <h5 class="card-header">
                                        Card Rate Details

                                        <div class="dropdown control">
                                            <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="card-widget-datetime">
                                            These rates are for the 24-hour period ending <span class="text-bold">Wednesday, Feb 8, 2017</span>
                                            23:00 WAT
                                        </div>

                                        <table class="table payment-card-rate-details-table">
                                            <tr>
                                                <td class="currency">
                                                    <img src="assets/img/flags/24/United-States.png" class="flag">
                                                    US Dollar
                                                </td>
                                                <td class="amount">320.00</td>
                                            </tr>
                                            <tr>
                                                <td class="currency">
                                                    <img src="assets/img/flags/24/United-Kingdom.png" class="flag">
                                                    Pounds Sterling
                                                </td>
                                                <td class="amount">407.59</td>
                                            </tr>
                                            <tr>
                                                <td class="currency">
                                                    <img src="assets/img/flags/24/European-Union.png" class="flag">
                                                    Euro
                                                </td>
                                                <td class="amount">347.83</td>
                                            </tr>
                                            <tr>
                                                <td class="currency">
                                                    <img src="assets/img/flags/24/Canada.png" class="flag">
                                                    Canadian Dollar
                                                </td>
                                                <td class="amount">248.39</td>
                                            </tr>
                                            <tr>
                                                <td class="currency">
                                                    <img src="assets/img/flags/24/United-Arab-Emirates.png" class="flag">
                                                    U.A.E. Dirham
                                                </td>
                                                <td class="amount">88.91</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card card-widget widget-payment-budget">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/img/widgets/cover.png" class="embed-responsive">
                                    </a>
                                    <a class="card-header">Magazine Images</a>
                                    <div class="card-widget-datetime">Last update <span class="text-bold">Apr 17, 2017</span></div>
                                    <div class="card-block">
                                        <div class="payment-budget-amount-block">
                                            <div class="text-action">$44.99</div>
                                            <div class="description">Budget</div>
                                        </div>
                                        <div class="payment-budget-remaining-block">
                                            <div class="text-action">Early Apr 2017</div>
                                            <div class="description color-purple">10 days Remaining</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-widget widget-payment-earnings">
                                    <h5 class="card-header">
                                        Next Payout

                                        <div class="dropdown control">
                                            <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="card-widget-datetime">
                                            Activity from <span class="text-bold">Jan 4, 2017</span> to <span class="text-bold">Jan 10, 2017</span>
                                        </div>

                                        <div class="payment-earnings-amount">$2.37</div>
                                        <div class="payment-earnings-amount-description">
                                            You’ve made $230 today
                                        </div>

                                        <div id="next-payout-chart" class="payment-earnings-chart"></div>
                                    </div>
                                </div>
                                <div class="card card-widget widget-tasoverview-progress">
                                    <h5 class="card-header">
                                        All Tasks Overview

                                        <div class="dropdown control">
                                            <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="card-widget-datetime">
                                            Next <span class="text-bold">4 weeks</span>
                                        </div>
                                        <div class="tasprogress-items">
                                            <div class="tasprogress-item">
                                                <div class="label">Week 3</div>
                                                <div class="progress">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar task-progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-due-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-qa-bar" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-delegated-bar" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tasprogress-item">
                                                <div class="label">Week 4</div>
                                                <div class="progress">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar task-progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-due-bar" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-qa-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-delegated-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tasprogress-item">
                                                <div class="label">Week 5</div>
                                                <div class="progress">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar task-progress-bar" role="progressbar" style="width: 50%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-due-bar" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-qa-bar" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-delegated-bar" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tasprogress-item">
                                                <div class="label">Week 6</div>
                                                <div class="progress">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar task-progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-due-bar" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-qa-bar" role="progressbar" style="width: 50%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar task-delegated-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="tasprogress-item-statuses">
                                            <li class="task-progress-bar-status">Progress</li>
                                            <li class="task-progress-due-status">Due</li>
                                            <li class="task-progress-qa-status">QA</li>
                                            <li class="task-progress-delegated-status">Delegated</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-widget widget-payment-earnings">
                                            <h5 class="card-header">
                                                Total Earnings

                                                <div class="dropdown control">
                                                    <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="icon la la-ellipsis-h"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Add Card</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </h5>
                                            <div class="card-block">
                                                <div class="card-widget-datetime">
                                                    In <span class="text-bold">12 Months</span>
                                                </div>

                                                <div class="payment-earnings-amount">$23.54</div>
                                                <div class="payment-earnings-amount-description">
                                                    Last month you’ve made $230
                                                </div>

                                                <div id="total-earning-chart" class="payment-earnings-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-payment-price-ratio green">
                                            <div class="price-ratio-title">
                                                Share Price
                                            </div>
                                            <div class="price-ratio-amount">23.82</div>
                                            <div class="price-ratio-progress">
                                                <span class="icon icon-circled-up-right"></span>
                                                <div class="text">0.32%</div>
                                            </div>
                                        </div>
                                        <div class="card widget-payment-price-ratio blue">
                                            <div class="price-ratio-title">
                                                Share Price
                                            </div>
                                            <div class="price-ratio-amount">23.82</div>
                                            <div class="price-ratio-progress">
                                                <span class="icon icon-circled-up-right"></span>
                                                <div class="text">0.32%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card widget-payment-price-ratio purple">
                                            <div class="price-ratio-title">
                                                Share Price
                                            </div>
                                            <div class="price-ratio-amount">0.23</div>
                                            <div class="price-ratio-progress">
                                                <span class="icon icon-circled-down-left"></span>
                                                <div class="text">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="card widget-payment-price-ratio yellow">
                                            <div class="price-ratio-title">
                                                Share Price
                                            </div>
                                            <div class="price-ratio-amount">0.23</div>
                                            <div class="price-ratio-progress">
                                                <span class="icon icon-circled-down-left"></span>
                                                <div class="text">1.56%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card card-widget widget-payment-table-invoicing">
                                    <h5 class="card-header">
                                        Invoicing

                                        <div class="controls">
                                            <a href="#" class="control-link">View All Invoices</a>
                                            <a href="#" class="control-icon">
                                                <span class="la la-plus-circle icon"></span>
                                            </a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table payment-table-invoicing">
                                            <tr>
                                                <td class="text-light" width="1">00451</td>
                                                <td>Design Works</td>
                                                <td class="text-light">Twitter</td>
                                                <td class="text-right">
                                                    <span class="badge badge-cranberry">Delayed</span>
                                                </td>
                                                <td width="1">$2500.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-light" width="1">00452</td>
                                                <td class="text-bold">Illustrations</td>
                                                <td class="text-light">Twitter</td>
                                                <td class="text-right">
                                                    <span class="badge badge-crusta">Pending</span>
                                                </td>
                                                <td class="text-bold" width="1">$460.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-light" width="1">00453</td>
                                                <td class="text-bold">UX Study</td>
                                                <td class="text-light">Twitter</td>
                                                <td class="text-right">
                                                    <span class="badge badge-mantis">Paid</span>
                                                </td>
                                                <td class="text-bold" width="1">$1280.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-light" width="1">00454</td>
                                                <td class="text-bold">UX Study</td>
                                                <td class="text-light">Twitter</td>
                                                <td class="text-right">
                                                    <span class="badge badge-default">Out</span>
                                                </td>
                                                <td class="text-bold" width="1">$1280.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-light" width="1">00455</td>
                                                <td class="text-bold">Design Support</td>
                                                <td class="text-light">Twitter</td>
                                                <td class="text-right">
                                                    <span class="badge badge-default">Out</span>
                                                </td>
                                                <td class="text-bold" width="1">$350.00</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card card-widget widget-tastable">
                                    <h5 class="card-header">
                                        Important Upcoming Tasks

                                        <div class="controls">
                                            <a href="#" class="control-link">View All Tasks</a>
                                            <a href="#" class="control-icon">
                                                <span class="la la-plus-circle icon"></span>
                                            </a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table table-tasks">
                                            <tr>
                                                <td class="cell-checkbox">
                                                    <label class="custom-control custom-checkbox checkbox no-description checkbox-success">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>Create new prototype for the landing page</td>
                                                <td class="text-right">
                                                    <span class="badge badge-cranberry">Out today</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cell-checkbox">
                                                    <label class="custom-control custom-checkbox checkbox no-description checkbox-success">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>Add new Google Analitics code to all files</td>
                                                <td class="text-right">
                                                    <span class="badge badge-default">Due in 3 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cell-checkbox">
                                                    <label class="custom-control custom-checkbox checkbox no-description checkbox-success">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>Finish dashboard UI Kit</td>
                                                <td class="text-right">
                                                    <span class="badge badge-default">Due in 5 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cell-checkbox">
                                                    <label class="custom-control custom-checkbox checkbox no-description checkbox-success">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>Update parallax scroll on team page</td>
                                                <td class="text-right">
                                                    <span class="badge badge-default">Due in 7 days</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cell-checkbox">
                                                    <label class="custom-control custom-checkbox checkbox no-description checkbox-success">
                                                        <input type="checkbox" class="custom-control-input" checked>
                                                        <span class="custom-control-indicator"></span>
                                                    </label>
                                                </td>
                                                <td class="cell-checked" colspan="2">Add new Google Analitics code to all files</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card card-widget widget-payment-table">
                                    <h5 class="card-header">
                                        Recent Income

                                        <div class="controls">
                                            <a href="#" class="control-link">View all</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table payment-table">
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-1.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-light">Easy One Page Dashboard</td>
                                                <td class="text-bold">$150</td>
                                                <td class="text-light text-right text-no-wrap">3 days ago</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-8.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-light">Easy One Page Dashboard</td>
                                                <td class="text-bold">$150</td>
                                                <td class="text-light text-right text-no-wrap">3 days ago</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-9.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-light">Easy One Page Dashboard</td>
                                                <td class="text-bold">$150</td>
                                                <td class="text-light text-right text-no-wrap">3 days ago</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-10.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-light">Easy One Page Dashboard</td>
                                                <td class="text-bold">$150</td>
                                                <td class="text-light text-right text-no-wrap">3 days ago</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-11.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-light">Easy One Page Dashboard</td>
                                                <td class="text-bold">$150</td>
                                                <td class="text-light text-right text-no-wrap">3 days ago</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card card-widget widget-payment-table">
                                    <h5 class="card-header">
                                        Best Customers

                                        <div class="controls">
                                            <a href="#" class="control-link">View all</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table payment-table">
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-1.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-bold text-right" width="1">$150</td>
                                                <td class="text-light text-right text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-8.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-bold text-right" width="1">$150</td>
                                                <td class="text-light text-right text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-9.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-bold text-right" width="1">$150</td>
                                                <td class="text-light text-right text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-10.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-bold text-right" width="1">$150</td>
                                                <td class="text-light text-right text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold text-no-wrap">
                                                    <img src="assets/img/avatars/avatar-11.jpg" width="28" height="28" class="avatar img-circle"> John Doe
                                                </td>
                                                <td class="text-bold text-right" width="1">$150</td>
                                                <td class="text-light text-right text-no-wrap" width="1">3 projects</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-widget widget-tasstatuses-progress">
                                    <h5 class="card-header">
                                        Tasks

                                        <div class="controls">
                                            <a href="#" class="control-link">January 2017</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="tasstatuses-progress-table">
                                            <tr>
                                                <td class="progress-status">Completed</td>
                                                <td width="1" class="text-light text-right">95%</td>
                                            </tr>
                                            <tr>
                                                <td class="progress-status">Total</td>
                                                <td width="1" class="text-light text-right">95%</td>
                                            </tr>
                                            <tr>
                                                <td class="progress-status">Monthle Average</td>
                                                <td width="1" class="text-light text-right">95%</td>
                                            </tr>
                                        </table>

                                        <hr>

                                        <div class="tastotal-statuses-progress">
                                            <span class="name">Progress</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 79%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="amount">79%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-widget widget-payment-active-clients">
                                    <h5 class="card-header">Active Clients</h5>
                                    <div class="card-block">
                                        <div class="card-widget-datetime">
                                            You’re currently in <span class="text-bold">TOP 10</span>
                                            of platform your rating is <span class="text-bold">4.85</span>.
                                            Keep up great work!
                                        </div>
                                        <div class="active-clients-category-progress">
                                            <span class="name">Rating</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="amount">95%</span>
                                        </div>
                                        <div class="active-clients-category-progress">
                                            <span class="name">Budget</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 68%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="amount">68%</span>
                                        </div>
                                        <div class="active-clients-category-progress">
                                            <span class="name">Timing</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-cranberry" role="progressbar" style="width: 36%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="amount">36%</span>
                                        </div>

                                        <hr>

                                        <div class="active-clients-category-progress">
                                            <span class="name">Rating</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="amount">55%</span>
                                        </div>
                                        <div class="active-clients-category-progress">
                                            <span class="name">Budget</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 18%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="amount">18%</span>
                                        </div>
                                        <div class="active-clients-category-progress">
                                            <span class="name">Timing</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="amount">76%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card card-widget widget-chart-orders">
                                    <h5 class="card-header">
                                        Orders

                                        <div class="controls">
                                            <a href="#" class="control-link">January 2017</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="chart-orders-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card card-widget widget-payment-total-amount purple-light">
                                    <h5 class="card-header">
                                        Total Teachers

                                        <div class="dropdown control">
                                            <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="payment-total-amount-item-icon-block">
                                            <span class="icon-combo-chart icon"></span>
                                        </div>

                                        <div class="payment-total-amount-item-body">
                                            <div class="payment-total-amount-item-amount">
                                                <span class="amount">103</span>
                                            </div>
                                            <div class="payment-total-amount-item-description">
                                                Today status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card card-widget widget-payment-total-amount green-light">
                                    <h5 class="card-header">
                                        Total Students

                                        <div class="dropdown control">
                                            <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="payment-total-amount-item-icon-block">
                                            <span class="la la-pie-chart icon"></span>
                                        </div>

                                        <div class="payment-total-amount-item-body">
                                            <div class="payment-total-amount-item-amount">
                                                <span class="amount">2612</span>
                                            </div>
                                            <div class="payment-total-amount-item-description">
                                                Today status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card card-widget widget-payment-total-amount pink-light">
                                    <h5 class="card-header">
                                        Total Admins

                                        <div class="dropdown control">
                                            <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="payment-total-amount-item-icon-block">
                                            <span class="la la-user icon"></span>
                                        </div>

                                        <div class="payment-total-amount-item-body">
                                            <div class="payment-total-amount-item-amount">
                                                <span class="amount">23</span>
                                            </div>
                                            <div class="payment-total-amount-item-description">
                                                Today status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card card-widget widget-payment-total-amount orange-light">
                                    <h5 class="card-header">
                                        Others

                                        <div class="dropdown control">
                                            <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="payment-total-amount-item-icon-block">
                                            <span class="la la-area-chart icon"></span>
                                        </div>

                                        <div class="payment-total-amount-item-body">
                                            <div class="payment-total-amount-item-amount">
                                                <span class="amount">67</span>
                                            </div>
                                            <div class="payment-total-amount-item-description">
                                                Today status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-widget payment-widget-table-and-map">
                                    <h5 class="card-header">
                                        Global Sales by Top Locations

                                        <div class="controls">
                                            <a href="#" class="control-link">This year</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <table class="table payment-widget-table-and-map-table">
                                                    <tr>
                                                        <td class="flag" width="20">
                                                            <img src="assets/img/flags/24/United-States.png" class="flag">
                                                        </td>
                                                        <td>
                                                            The USA
                                                        </td>
                                                        <td class="text-right">
                                                            2.910
                                                        </td>
                                                        <td class="amount">53.23%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flag" width="20">
                                                            <img src="assets/img/flags/24/United-Kingdom.png" class="flag">
                                                        </td>
                                                        <td>
                                                            UK
                                                        </td>
                                                        <td class="text-right">
                                                            1.300
                                                        </td>
                                                        <td class="amount">20.43%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flag" width="20">
                                                            <img src="assets/img/flags/24/Canada.png" class="flag">
                                                        </td>
                                                        <td>
                                                            Canada
                                                        </td>
                                                        <td class="text-right">
                                                            760
                                                        </td>
                                                        <td class="amount">10.35%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flag" width="20">
                                                            <img src="assets/img/flags/24/France.png" class="flag">
                                                        </td>
                                                        <td>
                                                            France
                                                        </td>
                                                        <td class="text-right">
                                                            600
                                                        </td>
                                                        <td class="amount">6.47%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flag" width="20">
                                                            <img src="assets/img/flags/24/Germany.png" class="flag">
                                                        </td>
                                                        <td>
                                                            Germany
                                                        </td>
                                                        <td class="text-right">
                                                            530
                                                        </td>
                                                        <td class="amount">4.91%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flag" width="20">
                                                            <img src="assets/img/flags/24/Spain.png" class="flag">
                                                        </td>
                                                        <td>
                                                            Spain
                                                        </td>
                                                        <td class="text-right">
                                                            322
                                                        </td>
                                                        <td class="amount">2.01%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flag" width="20">
                                                            <img src="assets/img/flags/24/Russia.png" class="flag">
                                                        </td>
                                                        <td>
                                                            Russia
                                                        </td>
                                                        <td class="text-right">
                                                            210
                                                        </td>
                                                        <td class="amount">0.66%</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-7">
                                                <div id="payment-widget-table-and-map-map" data-height="284"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card card-widget widget-messages-inbox">
                                    <h5 class="card-header">
                                        Inbox

                                        <div class="dropdown control">
                                            <a class="btn btn-link no-text no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon la la-ellipsis-h"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenu1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Add Card</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <div class="widget-messages-inbox-items">
                                            <a href="#" class="widget-messages-inbox-item">
                                                <div class="widget-messages-inbox-item-avatar avatar online">
                                                    <img src="assets/img/avatars/avatar-6.jpg" width="36" height="36">
                                                </div>
                                                <div class="widget-messages-inbox-item-body">
                                                    <div class="widget-messages-inbox-item-body-name-and-time">
                                                        <span class="name">Konstantin Berezhski</span>
                                                        <span class="time">12:55 pm</span>
                                                    </div>
                                                    <p class="widget-messages-inbox-item-body-message">
                                                        This isn't just about you. It's about wha...
                                                    </p>
                                                </div>
                                            </a>
                                            <a href="#" class="widget-messages-inbox-item">
                                                <div class="widget-messages-inbox-item-avatar avatar online">
                                                    <img src="assets/img/avatars/avatar-4.jpg" width="36" height="36">
                                                </div>
                                                <div class="widget-messages-inbox-item-body">
                                                    <div class="widget-messages-inbox-item-body-name-and-time">
                                                        <span class="name">Konstantin Berezhski</span>
                                                        <span class="time">12:55 pm</span>
                                                    </div>
                                                    <p class="widget-messages-inbox-item-body-message">
                                                        This isn't just about you. It's about wha...
                                                    </p>
                                                </div>
                                            </a>
                                            <a href="#" class="widget-messages-inbox-item">
                                                <div class="widget-messages-inbox-item-avatar avatar offline">
                                                    <img src="assets/img/avatars/avatar-2.jpg" width="36" height="36">
                                                </div>
                                                <div class="widget-messages-inbox-item-body">
                                                    <div class="widget-messages-inbox-item-body-name-and-time">
                                                        <span class="name">Konstantin Berezhski</span>
                                                        <span class="time">12:55 pm</span>
                                                    </div>
                                                    <p class="widget-messages-inbox-item-body-message">
                                                        This isn't just about you. It's about wha...
                                                    </p>
                                                </div>
                                            </a>
                                            <a href="#" class="widget-messages-inbox-item">
                                                <div class="widget-messages-inbox-item-avatar avatar online">
                                                    <img src="assets/img/avatars/avatar-13.jpg" width="36" height="36">
                                                </div>
                                                <div class="widget-messages-inbox-item-body">
                                                    <div class="widget-messages-inbox-item-body-name-and-time">
                                                        <span class="name">Konstantin Berezhski</span>
                                                        <span class="time">12:55 pm</span>
                                                    </div>
                                                    <p class="widget-messages-inbox-item-body-message">
                                                        This isn't just about you. It's about wha...
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card card-widget widget-table">
                                    <h5 class="card-header">
                                        Recent Activities

                                        <div class="controls">
                                            <a href="#" class="control-link">View All Invoices</a>
                                        </div>
                                    </h5>
                                    <div class="card-block">
                                        <table class="table payment-table-invoicing">
                                            <tr>
                                                <th width="1">#</th>
                                                <th>Subject Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th width="1">Status</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-cranberry">Delayed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-crusta">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-crusta">Pnding</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>English – Paper 1</td>
                                                <td>March 17, 2017</td>
                                                <td>March 28, 2017</td>
                                                <td>
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card widget-weather-and-datetime sunny">
                                    <div class="widget-weather-and-datetime-weather-block">
                                        <div class="widget-weather-and-datetime-weather-block-amount">
                                            +24º
                                        </div>
                                        <div class="widget-weather-and-datetime-weather-block-type">
                                            Sunny
                                        </div>
                                    </div>
                                    <div class="widget-weather-and-datetime-datetime-block">
                                        <div class="widget-weather-and-datetime-datetime-block-datetime">6:18 pm</div>
                                        <div class="widget-weather-and-datetime-datetime-block-location">los angeles</div>
                                        <span class="icon wi wi-day-cloudy"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card widget-weather-and-datetime cold">
                                    <div class="widget-weather-and-datetime-weather-block">
                                        <div class="widget-weather-and-datetime-weather-block-amount">
                                            -24º
                                        </div>
                                        <div class="widget-weather-and-datetime-weather-block-type">
                                            Show
                                        </div>
                                    </div>
                                    <div class="widget-weather-and-datetime-datetime-block">
                                        <div class="widget-weather-and-datetime-datetime-block-datetime">6:18 pm</div>
                                        <div class="widget-weather-and-datetime-datetime-block-location">los angeles</div>
                                        <span class="icon wi wi-snow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="card widget-simple-weather-only sunny">
                                    <span class="icon wi wi-day-cloudy"></span>
                                    <div class="widget-simple-weather-only-body">
                                        <div class="widget-simple-weather-only-block-amount">
                                            +10º
                                        </div>
                                        <div class="widget-simple-weather-only-location">
                                            Los Angeles
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="card widget-simple-weather-only cold">
                                    <span class="icon wi wi-snow"></span>
                                    <div class="widget-simple-weather-only-body">
                                        <div class="widget-simple-weather-only-block-amount">
                                            -2º
                                        </div>
                                        <div class="widget-simple-weather-only-location">
                                            Los Angeles
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-tabbed-sidebar-sidebar">
                        <div class="tabs-container tabs-default tabs-with-separator tabs-header-default tabs-info">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-toggle="tab" data-target="#tabbed-sidebar-activity">
                                        <span class="icon la la-flash">
                                            <span class="amount">3</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="tab" data-target="#tabbed-sidebar-comments">
                                        <span class="icon la la-comments">
                                            <span class="amount">1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="tab" data-target="#tabbed-sidebar-posts">
                                        <span class="icon la la-book">
                                            <span class="amount">6</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="tab" data-target="#tabbed-sidebar-favourites">
                                        <span class="icon la la-star-o">
                                            <span class="amount">4</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabbed-sidebar-activity" role="tabpanel">
                                    <div class="tab-pane-content">
                                        <div class="tabbed-sidebar-activity">
                                            <div class="tabbed-sidebar-tab-content-header">
                                                <h5>نشاطات المستخدمين</h5>
                                                <div class="input-icon icon-left icon icon-lg icon-color-primary">
                                                    <input id="input-group-icon-text" type="text" class="form-control" placeholder="بحث">
                                                    <span class="icon-addon">
                                                        <span class="la la-search"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="tabbed-sidebar-activity-items scrollable" data-auto-height>
                                                <div class="tabbed-sidebar-activity-item activity-item-status-active">
                                                    <div class="action-wrapper">
                                                        <img src="assets/img/avatars/avatar-6.jpg" alt="" class="avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="action-message">Hi, What you think about new deal</a>
                                                    </div>
                                                    <span class="badge badge-primary sm">New</span>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item activity-item-status-active">
                                                    <div class="action-wrapper">
                                                        <img src="assets/img/avatars/avatar-11.jpg" alt="" class="avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="action-message">Hi, What you think about new deal</a>
                                                    </div>
                                                    <span class="badge badge-success sm">Completed</span>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item activity-item-status-active">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-star color-warning icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">GOOG:US, 300 @ 145.32 opportunity</a>
                                                    </div>
                                                    <span class="badge badge-danger sm">Canceled</span>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-check color-success icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Filled — Forson Inc. — 300 — $5,600</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-check color-success icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Filled — Marta Skyson — 2000 — $34,600</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <img src="assets/img/avatars/avatar-5.jpg" alt="" class="avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="action-message">Hi, What you think about new deal</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-flash icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-star color-warning icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Samsung Note 7 Users Urged to Turn Phone</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-plus-circle color-info icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">New — Shell Inc. — 120 — $5600</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <img src="assets/img/avatars/avatar-2.jpg" alt="" class="avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="action-message">Hi Konstantin, Sent you quarter report</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-star color-pink icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Asset Reporting Lored</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-archive color-gray icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-calendar color-info icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-plus-circle color-info icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">New — Shell Inc. — 120 — $5600</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <img src="assets/img/avatars/avatar-3.jpg" alt="" class="avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="action-message">Hi Konstantin, Sent you quarter report</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-star color-pink icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Asset Reporting Lored</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-archive color-gray icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-calendar color-info icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-plus-circle color-success icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">New — Shell Inc. — 120 — $5600</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <img src="assets/img/avatars/avatar-8.jpg" alt="" class="avatar rounded-circle" width="25" height="25">
                                                        <a href="#" class="action-message">Hi Konstantin, Sent you quarter report</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-bookmark-o color-danger icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Asset Reporting Lored</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-archive color-gray icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-activity-item">
                                                    <div class="action-wrapper">
                                                        <span class="action-icon">
                                                            <span class="la la-calendar color-info icon"></span>
                                                        </span>
                                                        <a href="#" class="action-message">Gold (-1,22%), estimated 3% loss</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabbed-sidebar-comments" role="tabpanel">
                                    <div class="tab-pane-content">
                                        <div class="tabbed-sidebar-comments">
                                            <div class="tabbed-sidebar-tab-content-header">
                                                <h5>Comments</h5>
                                                <div class="input-icon icon-right icon icon-lg icon-color-primary">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="icon-addon">
                                                        <span class="la la-search"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="tabbed-sidebar-comment-items scrollable" data-auto-height>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-3.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Matthew Arnold</a>
                                                            <span class="description">added a new task to the project <a href="#" class="color-info">Website redesign</a></span>

                                                            <div class="datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-4.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Rachel Matthews</a>
                                                            <span class="description">leave a comment <a href="#" class="color-info">Lake Hall Beer and Pizza</a></span>

                                                            <div class="datetime">
                                                                September 26, 2016 at 19:25 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        It had to end sometime. Apple’s incredible growth that saw the company report record quarterly earnings over a span of 13 years was untenable.
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-10.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Marilyn Fox</a>
                                                            <span class="description">leave a comment <a href="#" class="color-info">Sample Post</a></span>

                                                            <div class="datetime">
                                                                September 17, 2016 at 11:00 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-3.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Matthew Arnold</a>
                                                            <span class="description">added a new task to the project <a href="#" class="color-info">Website redesign</a></span>

                                                            <div class="datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-3.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Matthew Arnold</a>
                                                            <span class="description">added a new task to the project <a href="#" class="color-info">Website redesign</a></span>

                                                            <div class="datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-3.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Matthew Arnold</a>
                                                            <span class="description">added a new task to the project <a href="#" class="color-info">Website redesign</a></span>

                                                            <div class="datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-3.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Matthew Arnold</a>
                                                            <span class="description">added a new task to the project <a href="#" class="color-info">Website redesign</a></span>

                                                            <div class="datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-3.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Matthew Arnold</a>
                                                            <span class="description">added a new task to the project <a href="#" class="color-info">Website redesign</a></span>

                                                            <div class="datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                                <div class="tabbed-sidebar-comment-item">
                                                    <div class="tabbed-sidebar-comment-action">
                                                        <img src="assets/img/avatars/avatar-3.jpg" class="avatar" width="25" height="25">
                                                        <div class="action">
                                                            <a href="#" class="name">Matthew Arnold</a>
                                                            <span class="description">added a new task to the project <a href="#" class="color-info">Website redesign</a></span>

                                                            <div class="datetime">
                                                                September 18, 2016 at 12:38 PM
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabbed-sidebar-comment-item-message">
                                                        Perhaps you'll take me out one day - or do I have to make an appointment?
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tabbed-sidebar-posts" role="tabpanel">
                                    <div class="tab-pane-content">
                                        <div class="tabbed-sidebar-posts">
                                            <div class="tabbed-sidebar-tab-content-header">
                                                <h5>Posts</h5>
                                                <div class="input-icon icon-right icon icon-lg icon-color-primary">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="icon-addon">
                                                        <span class="la la-search"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="tabbed-sidebar-post-items scrollable" data-auto-height>
                                                <a href="#" class="tabbed-sidebar-post-item">
                                                    <img src="assets/img/thumbs/ph-1.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-post-item">
                                                    <img src="assets/img/thumbs/ph-2.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-post-item">
                                                    <img src="assets/img/thumbs/ph-3.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-post-item">
                                                    <img src="assets/img/thumbs/ph-4.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-post-item">
                                                    <img src="assets/img/thumbs/ph-5.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-post-item">
                                                    <img src="assets/img/thumbs/ph-1.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-post-item">
                                                    <img src="assets/img/thumbs/ph-1.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-post-item">
                                                    <img src="assets/img/thumbs/ph-1.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabbed-sidebar-favourites" role="tabpanel">
                                    <div class="tab-pane-content">
                                        <div class="tabbed-sidebar-favourites">
                                            <div class="tabbed-sidebar-tab-content-header">
                                                <h5>Favourites</h5>
                                                <div class="input-icon icon-right icon icon-lg icon-color-primary">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="icon-addon">
                                                        <span class="la la-search"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="tabbed-sidebar-favourites-items scrollable" data-auto-height>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <img src="assets/img/thumbs/ph-1.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon action-file">
                                                        <span class="la la-file-word-o color-info icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">annual_report_2016.docx</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">156 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon action-file">
                                                        <span class="la la-file-pdf-o color-danger icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">certificate.pdf</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">88 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <img src="assets/img/avatars/avatar-7.jpg" alt="" class="avatar" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Barbara Curtis</span>
                                                        <span class="extra-info">Product Manager</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon">
                                                        <span class="la la-link icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">The Verge</span>
                                                        <span class="extra-info color-info">HTTP://www.theverge.com</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <img src="assets/img/thumbs/ph-3.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon action-file">
                                                        <span class="la la-file-word-o color-info icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">annual_report_2016.docx</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">156 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon action-file">
                                                        <span class="la la-file-pdf-o color-danger icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">certificate.pdf</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">88 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <img src="assets/img/avatars/avatar-7.jpg" alt="" class="avatar" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Barbara Curtis</span>
                                                        <span class="extra-info">Product Manager</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon">
                                                        <span class="la la-link icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">The Verge</span>
                                                        <span class="extra-info color-info">HTTP://www.theverge.com</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <img src="assets/img/thumbs/ph-2.png" alt="" class="thumb" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Road trip essentials</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">1200 views</span>
                                                            <span class="amount-block">34 comments</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon action-file">
                                                        <span class="la la-file-word-o color-info icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">annual_report_2016.docx</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">156 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon action-file">
                                                        <span class="la la-file-pdf-o color-danger icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">certificate.pdf</span>
                                                        <span class="extra-info">
                                                            <span class="amount-block">88 KB</span>
                                                        </span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <img src="assets/img/avatars/avatar-7.jpg" alt="" class="avatar" width="36" height="36">
                                                    <span href="#" class="description">
                                                        <span class="name">Barbara Curtis</span>
                                                        <span class="extra-info">Product Manager</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                                <a href="#" class="tabbed-sidebar-favourite-item">
                                                    <span class="action-icon">
                                                        <span class="la la-link icon"></span>
                                                    </span>
                                                    <span href="#" class="description">
                                                        <span class="name">The Verge</span>
                                                        <span class="extra-info color-info">HTTP://www.theverge.com</span>
                                                    </span>

                                                    <button class="btn btn-primary-outline light no-text remove">
                                                        <span class="la la-trash-o icon"></span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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

    <script src="{{ asset('libs/d3/d3.min.js')}}"></script>
    <script src="{{ asset('libs/maplace/maplace.min.js')}}"></script>
    <script src="https://maps.google.com/maps/api/js?libraries=geometry&v=3.26&key=AIzaSyBBjLDxcCjc4s9ngpR11uwBWXRhyp3KPYM"></script>
    <script type="application/javascript">
        (function ($) {
            $(document).ready(function () {
                c3.generate({
                    bindto: '#next-payout-chart',
                    data: {
                        columns: [
                            ['data1', 6, 5, 6, 5, 7, 8, 7]
                        ],
                        types: {
                            data1: 'area'
                        },
                        colors: {
                            data1: '#81c159'
                        }
                    },
                    legend: {
                        show: false
                    },
                    tooltip: {
                        show: false
                    },
                    point: {
                        show: false
                    },
                    axis: {
                        x: {show:false},
                        y: {show:false}
                    }
                });

                c3.generate({
                    bindto: '#total-earning-chart',
                    data: {
                        columns: [
                            ['data1', 6, 5, 6, 5, 7, 8, 7]
                        ],
                        types: {
                            data1: 'area'
                        },
                        colors: {
                            data1: '#4e54a8'
                        }
                    },
                    legend: {
                        show: false
                    },
                    tooltip: {
                        show: false
                    },
                    point: {
                        show: false
                    },
                    axis: {
                        x: {show:false},
                        y: {show:false}
                    }
                });

                c3.generate({
                    bindto: '.chart-orders-block',
                    data: {
                        columns: [
                            ['Revenue', 150, 200, 220, 280, 400, 160, 260, 400, 300, 400, 500, 420, 500, 300, 200, 100, 400, 600, 300, 360, 600],
                            ['Profit', 350, 300,  200, 140, 200, 30, 200, 100, 400, 600, 300, 200, 100, 50, 200, 600, 300, 500, 30, 200, 320]
                        ],
                        colors: {
                            'Revenue': '#f88528',
                            'Profit': '#81c159'
                        }
                    },
                    point: {
                        r: 5
                    },
                    grid: {
                        y: {
                            show: true
                        }
                    }
                });



                setTimeout(function () {
                    new Noty({
                        text: '<strong>مرحباً بك في لوحة التحكم </strong>! <br> You successfully read this important alert message.',
                        type   : 'information',
                        theme  : 'mint',
                        layout : 'topLeft',
                        timeout: 3000
                    }).show();
                }, 1500);

                var maplace = new Maplace({
                    map_div: '#payment-widget-table-and-map-map',
                    controls_on_map: false
                });
                maplace.Load();

            });
        })(jQuery);
    </script>
@stop

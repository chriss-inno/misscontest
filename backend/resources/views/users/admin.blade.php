@extends('main.master')
@section('page-style')
    {!!HTML::style("admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css")!!}
    {!!HTML::style("admin/css/owl.carousel.css")!!}
@stop
@section('page-menus')
    <ul class="sidebar-menu" id="nav-accordion">
        <li >
            <a href="{{url('home')}}" class="active">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-users"></i>
                <span>Contestants</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('contestant/create')}}">Registration</a></li>
                <li><a  href="{{url('contestant/manage')}}">Manage contestants</a></li>
                <li><a  href="{{url('contestant/reviews')}}">Contestants Reviews</a></li>
                <li><a  href="{{url('contestant/blog')}}">Profile Blog</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-users"></i>
                <span>Review Questions </span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('questions/manage')}}">Manage Questions</a></li>
                <li><a  href="{{url('answers/manage')}}">Manage Answers</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-laptop"></i>
                <span>Contents</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('contents/articles/create')}}">Create Articles</a></li>
                <li><a  href="{{url('contents/articles')}}">Manage Articles</a></li>
                <li><a  href="{{url('contents/categories')}}">Articles Categories</a></li>
                <li><a  href="{{url('contents/modules')}}">Manage Modules</a></li>
                <li><a  href="{{url('contents/media')}}">Manage Media</a></li>
                <li><a  href="{{url('contents/documents')}}">Manage Documents</a></li>
                <li><a  href="{{url('contents/galleries')}}">Galleries</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span>Site Menu</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('menus/create')}}">Create Menu</a></li>
                <li><a  href="{{url('menus/groups')}}">Menu Groups</a></li>
            </ul>
        </li>



        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-users"></i>
                <span>Membership</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('membership/registration')}}">Members registration</a></li>
                <li><a  href="{{url('membership/subscriptions')}}">Subscriptions</a></li>
                <li><a  href="{{url('membership/payments')}}">Payments</a></li>
                <li><a  href="{{url('membership/reports')}}">Reports</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;" >
                <i class="fa fa-calendar"></i>
                <span>Events</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('events/create')}}">Create Event</a></li>
                <li><a  href="{{url('events/view')}}">Events Blog</a></li>
                <li><a  href="{{url('events/manage')}}">Manage Events</a></li>
                <li><a  href="{{url('events/settings')}}">Event Setting</a></li>
                <li><a  href="{{url('events/calendar')}}">Event Calendar</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-user-md"></i>
                <span>User Management</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('users/view')}}">Registered Users</a></li>
                <li><a  href="{{url('users/groups')}}">User Groups</a></li>
                <li><a  href="{{url('users/manage')}}">Manage Users</a></li>
                <li><a  href="{{url('users/reports')}}">Reports</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>Settings</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('settings/site')}}">Site setting</a></li>
                <li><a  href="{{url('settings/mail')}}">Mail setting</a></li>
                <li><a  href="{{url('settings/jobs')}}">Background Jobs</a></li>
                <li><a  href="{{url('settings/reports')}}">Reports</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-user"></i>
                <span>My Profile</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('profile')}}">My profile</a></li>
                <li><a  href="{{url('logout')}}">Logout</a></li>
            </ul>
        </li>

    </ul>
    @stop
@section('page-scripts')
    {!!HTML::script("admin/js/sparkline-chart.js")!!}
    {!!HTML::script("admin/js/easy-pie-chart.js")!!}
    {!!HTML::script("admin/js/count.js")!!}
    {!!HTML::script("admin/assets/highcharts/js/highcharts.js") !!}
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {

            $(function () {
                $('#highchart').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Registered Users per Month'
                    },
                    xAxis: {
                        categories: [
                            <?php $month = strtotime('2011-12-12');?>
                                    @for($i=1;$i<=12; $i++)
                            <?php $month = strtotime('+1 month', $month); ?>
                                    '{{date('F', $month)}}',
                            @endfor
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Number of users'
                        }
                    },
                    credits: {
                        enabled: false
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    <?php
                            $m3=date("Y-m-d",strtotime(date("Y-m-d").'-3 months'));
                            $data3="";
                            $month = strtotime('2011-12-12');
                            for($i=1;$i<=12; $i++)
                            {
                                $month = strtotime('+1 month', $month);
                                $cdate=date("Y")."-".date('m', $month)."-01";
                                $usersc=\App\User::where(\DB::raw('YEAR(registration_date)'), '=', date('Y'))
                                        ->where(\DB::raw('MONTH(registration_date)'), '=',date('n',strtotime($cdate)))->get();
                                $data3.=count($usersc).",";
                            }
                            $data3=substr($data3,0,strlen($data3)-1);
                            ?>
                    series: [{
                        name: 'Users',
                        data: [<?php echo $data3?>]

                    }]
                });
            });

        } );
    </script>
    @stop
@section('contents')
   <section class="wrapper">
            <!--state overview start-->
            <div class="row state-overview">
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="value">
                            <h1 class="count">
                                {{count(\App\User::all())}}
                            </h1>
                            <p>Members</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol red">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count2">
                                {{count(\App\Contestant::all())}}
                            </h1>
                            <p>Contestants</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol yellow">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count3">
                                0
                            </h1>
                            <p>Forums</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol blue">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="value">
                            <h1 class=" count4">
                                0
                            </h1>
                            <p>Forum Topics</p>
                        </div>
                    </section>
                </div>
            </div>
            <!--state overview end-->
       <div class="row">
           <div class="col-lg-8">
               <div class="row">
                   <div class="col-lg-12">
                   <!--latest product info start-->
                   <section class="panel post-wrap pro-box">
                       <aside>
                           <div class="post-info">
                               <span class="arrow-pro right"></span>
                               <div class="panel-body">
                                   <?php $contest=\App\Contestant::orderBy('hints','Desc')->first();?>
                                   <h1><strong>popular</strong> <br> Contestant of this week</h1>
                                   <div class="desk yellow">
                                       @if(count($contest)> 0 && $contest !=null)
                                       <h3>{{$contest->full_name}}</h3>
                                       <p>{{$contest->profile_note}}</p>
                                           @endif
                                   </div>
                               </div>
                           </div>
                       </aside>
                       <aside class="post-highlight yellow v-align">
                           <div class="panel-body text-center">
                               <div class="pro-thumb">
                                   @if(count($contest)> 0 && $contest !=null)
                                   @if($contest->profile_image !="")
                                           <img src="{{ asset('admin/img/contestant_galley/'.$contest->profile_image) }}" alt="{{$contest->full_name}}">
                                       @else
                                         <img src="{{ asset('admin/img/ring.jpg') }}" alt="">
                                       @endif
                                   @endif
                               </div>
                           </div>
                       </aside>
                   </section>

                   </div>
                   </div>
               <div class="row">
                   <div class="col-lg-12">
                       <div id="highchart" style="height:400px;"></div>
                   </div>
               </div>
           </div>
           <div class="col-lg-4">
               <div class="row">
                  <div class="col-lg-12">
                   <!--widget start-->
                   <section class="panel">
                       <header class="panel-heading tab-bg-dark-navy-blue">
                           <ul class="nav nav-tabs nav-justified ">
                               <li class="active">
                                   <a href="#popular" data-toggle="tab">
                                       Popular
                                   </a>
                               </li>
                               <li>
                                   <a href="#comments" data-toggle="tab">
                                       Comments
                                   </a>
                               </li>
                               <li class="">
                                   <a href="#recent" data-toggle="tab">
                                       Recents
                                   </a>
                               </li>
                           </ul>
                       </header>
                       <div class="panel-body">
                           <div class="tab-content tasi-tab">
                               <div class="tab-pane active" id="popular">
                                   <article class="media">
                                       <a class="pull-left thumb p-thumb">
                                           <img src="img/product1.jpg">
                                       </a>
                                       <div class="media-body">
                                           <a class=" p-head" href="#">Item One Tittle</a>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </article>
                                   <article class="media">
                                       <a class="pull-left thumb p-thumb">
                                           <img src="img/product2.png">
                                       </a>
                                       <div class="media-body">
                                           <a class=" p-head" href="#">Item Two Tittle</a>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </article>
                                   <article class="media">
                                       <a class="pull-left thumb p-thumb">
                                           <img src="img/product3.png">
                                       </a>
                                       <div class="media-body">
                                           <a class=" p-head" href="#">Item Three Tittle</a>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                   </article>
                               </div>
                               <div class="tab-pane" id="comments">
                                   <article class="media">
                                       <a class="pull-left thumb p-thumb">
                                           <img src="img/avatar-mini.jpg">
                                       </a>
                                       <div class="media-body">
                                           <a class="cmt-head" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                           <p> <i class="fa fa-clock-o"></i> 1 hours ago</p>
                                       </div>
                                   </article>
                                   <article class="media">
                                       <a class="pull-left thumb p-thumb">
                                           <img src="img/avatar-mini2.jpg">
                                       </a>
                                       <div class="media-body">
                                           <a class="cmt-head" href="#">Nulla vel metus scelerisque ante sollicitudin commodo</a>
                                           <p> <i class="fa fa-clock-o"></i> 23 mins ago</p>
                                       </div>
                                   </article>
                                   <article class="media">
                                       <a class="pull-left thumb p-thumb">
                                           <img src="img/avatar-mini3.jpg">
                                       </a>
                                       <div class="media-body">
                                           <a class="cmt-head" href="#">Donec lacinia congue felis in faucibus. </a>
                                           <p> <i class="fa fa-clock-o"></i> 15 mins ago</p>
                                       </div>
                                   </article>
                               </div>
                               <div class="tab-pane " id="recent">
                                   Recent Item goes here
                               </div>
                           </div>
                       </div>
                   </section>
                   <!--widget end-->
                   </div>
                </div>
               <div class="row">
                  <div class="col-lg-12">
                   <section class="panel">
                       <header class="panel-heading">
                          Recent Feedback
                       </header>
                       <div class="list-group">
                           <a class="list-group-item " href="javascript:;">
                               <h4 class="list-group-item-heading">List group item heading</h4>
                               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                           </a>
                           <a class="list-group-item active" href="javascript:;">
                               <h4 class="list-group-item-heading">List group item heading</h4>
                               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                           </a>
                           <a class="list-group-item" href="javascript:;">
                               <h4 class="list-group-item-heading">List group item heading</h4>
                               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                           </a>
                       </div>
                   </section>
               </div>
               </div>
           </div>
       </div>
        </section>
    @stop

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
                <i class="fa fa-chain"></i>
                <span>Polls</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('polls/create')}}">Create Poll</a></li>
                <li><a  href="{{url('polls/groups')}}">Manage Polls</a></li>
            </ul>
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
                <i class="fa fa-envelope"></i>
                <span>Member Forums</span>
            </a>
            <ul class="sub">
                <li><a  href="{{url('forums/create')}}">Create Forum</a></li>
                <li><a  href="{{url('forums/view')}}">Manage Forum</a></li>
                <li><a  href="{{url('forums/categories')}}">Forum Categories</a></li>
                <li><a  href="{{url('forums/moderation')}}">Reported Issues</a></li>
                <li><a  href="{{url('forums/subscription')}}">Manage Subscription</a></li>
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
                <li><a  href="{{url('settings/site')}}">Site setting</a></li>
                <li><a  href="{{url('settings/mail')}}">Mail setting</a></li>
                <li><a  href="{{url('settings/jobs')}}">Background Jobs</a></li>
                <li><a  href="{{url('settings/reports')}}">Reports</a></li>
            </ul>
        </li>

    </ul>
    @stop
@section('page-scripts')
    {!!HTML::script("admin/js/sparkline-chart.js")!!}
    {!!HTML::script("admin/js/easy-pie-chart.js")!!}
    {!!HTML::script("admin/js/count.js")!!}
    <script>

        //knob
        $(".knob").knob();

    </script>
    <script>

        //owl carousel

        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
                autoPlay:true

            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

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
                                0
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
                                0
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
                                   <h1><strong>popular</strong> <br> Contestant of this week</h1>
                                   <div class="desk yellow">
                                       <h3>Dimond Ring</h3>
                                       <p>Lorem ipsum dolor set amet lorem ipsum dolor set amet ipsum dolor set amet</p>
                                   </div>
                               </div>
                           </div>
                       </aside>
                       <aside class="post-highlight yellow v-align">
                           <div class="panel-body text-center">
                               <div class="pro-thumb">
                                   <img src="{{ asset('admin/img/ring.jpg') }}" alt="">
                               </div>
                           </div>
                       </aside>
                   </section>
                   <!--latest product info end-->
                   <!--twitter feedback start-->
                   <section class="panel post-wrap pro-box">
                       <aside class="post-highlight terques v-align">
                           <div class="panel-body">
                               <h2>Flatlab is new model of admin dashboard <a href="javascript:;"> http://demo.com/</a> 4 days ago  by jonathan smith</h2>
                           </div>
                       </aside>
                       <aside>
                           <div class="post-info">
                               <span class="arrow-pro left"></span>
                               <div class="panel-body">
                                   <div class="text-center twite">
                                       <h1>Twitter Feed</h1>
                                   </div>

                                   <footer class="social-footer">
                                       <ul>
                                           <li>
                                               <a href="#">
                                                   <i class="fa fa-facebook"></i>
                                               </a>
                                           </li>
                                           <li class="active">
                                               <a href="#">
                                                   <i class="fa fa-twitter"></i>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="#">
                                                   <i class="fa fa-google-plus"></i>
                                               </a>
                                           </li>
                                           <li>
                                               <a href="#">
                                                   <i class="fa fa-pinterest"></i>
                                               </a>
                                           </li>
                                       </ul>
                                   </footer>
                               </div>
                           </div>
                       </aside>
                   </section>
                   <!--twitter feedback end-->
                   </div>
                   </div>
               <div class="row">
                   <div class="col-lg-12">
                       <section class="panel">
                           <div class="panel-body">
                               <ul class="summary-list">
                                   <li>
                                       <a href="javascript:;">
                                           <i class=" fa fa-shopping-cart text-primary"></i>
                                           1 Purchase
                                       </a>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <i class="fa fa-envelope text-info"></i>
                                           15 Emails
                                       </a>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <i class=" fa fa-picture-o text-muted"></i>
                                           2 Photo Upload
                                       </a>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <i class="fa fa-tags text-success"></i>
                                           19 Sales
                                       </a>
                                   </li>
                                   <li>
                                       <a href="javascript:;">
                                           <i class="fa fa-microphone text-danger"></i>
                                           4 Audio
                                       </a>
                                   </li>
                               </ul>
                           </div>
                       </section>
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

@extends('main.master')
@section('page-style')
    {!!HTML::style("admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css")!!}
@stop
@section('page-title')
    Contestant Details-:Profile Blog
@stop
@section('page-menus')
    <ul class="sidebar-menu" id="nav-accordion">
        <li >
            <a href="{{url('home')}}">
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
            <a href="javascript:;"  class="active">
                <i class="fa fa-users"></i>
                <span>Contestants</span>
            </a>
            <ul class="sub">
                <li ><a  href="{{url('contestant/create')}}">Registration</a></li>
                <li class="active"><a  href="{{url('contestant/manage')}}">Manage contestants</a></li>
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
@section('page-scripts-before1')
    {!!HTML::script("admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js")!!}
    {!!HTML::script("admin/js/jquery.ui.touch-punch.min.js")!!}
    {!!HTML::script("admin/js/jquery.customSelect.min.js")!!}
@stop
@section('page-scripts')
    {!!HTML::script("admin/js/sliders.js")!!}

    <script type="text/javascript">

        $(document).ready(function() {

            $(function(){
                $('select.styled').customSelect();
            });
        });


    </script>

@stop
@section('contents')
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                <div class="row">
                    <div class="col-lg-8"><strong>Contestant Details-:Profile</strong></div>
                    <div class="col-lg-4 pull-right">
                        <div class="btn-group btn-group-justified">
                            <a class="btn btn-primary" href="{{url('contestant/create')}}">Register new</a>
                            <a class="btn btn-primary" href="{{url('contestant/manage')}}">Manage</a>
                            <a class="btn btn-primary" href="{{url('contestant/blog')}}">Blog</a>
                        </div>
                    </div>
                </div>

            </header>
            <div class="panel-body">
                <!-- page start-->
                <div class="row">
                    <div class="col-md-12">

                        <section class="panel">
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="pro-img-details">
                                        <img src="{{asset(storage_path().'/images/'.$contest->profile_image) }}" alt="{{$contestant->contestant_name}}" width="370px" height="370px"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="pro-d-title">
                                        <a href="#" class="text-capitalize">
                                           {{$contestant->contestant_name}}
                                        </a>
                                    </h4>
                                    <div class="product_meta">
                                        <span class="posted_in"> <strong>Birthday:</strong> <a rel="tag" href="#">{{$contestant->dob}}</a></span>
                                        <span class="tagged_as"><strong>Phone Number:</strong> <a rel="tag" href="#">{{$contestant->phone}}</a></span>
                                        <span class="tagged_as"><strong>Email:</strong> <a rel="tag" href="#">{{$contestant->email}}</a></span>
                                        <span class="tagged_as"><strong>Region:</strong> <a rel="tag" href="#">{{$contestant->region->region_name}}</a></span>
                                        <span class="tagged_as"><strong>District:</strong> <a rel="tag" href="#">{{$contestant->district->district_name}}</a></span>
                                    </div>
                                    <p>
                                        <?php echo $contestant->profile_note;?>
                                    </p>
                                </div>
                            </div>
                        </section>

                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue">
                                <ul class="nav nav-tabs ">
                                    <li class="active">
                                        <a data-toggle="tab" href="#description">
                                            Profile blog
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#reviews">
                                            Reviews
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#votes">
                                            Votes
                                        </a>
                                    </li>

                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content tasi-tab">
                                    <div id="description" class="tab-pane active">
                                        <h4 class="pro-d-head">Product Description</h4>
                                        <p> Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. </p>
                                        <p> Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. </p>
                                    </div>
                                    <div id="reviews" class="tab-pane">
                                        <h4 class="pro-d-head">Visitors Reviews</h4>
                                        <article class="media">
                                            <a class="pull-left thumb p-thumb">
                                                <img src="img/avatar-mini.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="#" class="cmt-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                                <p> <i class="fa fa-time"></i> 1 hours ago</p>
                                            </div>
                                        </article>
                                        <article class="media">
                                            <a class="pull-left thumb p-thumb">
                                                <img src="img/avatar-mini2.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="#" class="cmt-head">Nulla vel metus scelerisque ante sollicitudin commodo</a>
                                                <p> <i class="fa fa-time"></i> 23 mins ago</p>
                                            </div>
                                        </article>
                                        <article class="media">
                                            <a class="pull-left thumb p-thumb">
                                                <img src="img/avatar-mini3.jpg">
                                            </a>
                                            <div class="media-body">
                                                <a href="#" class="cmt-head">Donec lacinia congue felis in faucibus. </a>
                                                <p> <i class="fa fa-time"></i> 15 mins ago</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div id="votes" class="tab-pane">
                                        <h4 class="pro-d-head">Votes</h4>
                                        <p> Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. </p>
                                        <p> Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="row product-list">
                            <div class="col-md-4">
                                <section class="panel">
                                    <div class="pro-img-box">
                                        <img src="{{asset('admin/img/product-list/pro-1.jpg') }}" alt=""/>

                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title">

                                            </a>
                                        </h4>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-4">
                                <section class="panel">
                                    <div class="pro-img-box">
                                        <img src="{{asset('admin/img/product-list/pro1.jpg') }}" alt=""/>
                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title">

                                            </a>
                                        </h4>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-4">
                                <section class="panel">
                                    <div class="pro-img-box">
                                        <img src="{{asset('admin/img/product-list/pro2.jpg') }}" alt=""/>

                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title">

                                            </a>
                                        </h4>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- page end-->
            </div>
        </section>
    </section>
@stop
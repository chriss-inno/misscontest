@extends('main.master')
@section('page-style')
    {!!HTML::style("admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css")!!}
        <!-- blueimp Gallery styles -->
{!!HTML::style("http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css")!!}
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
{!!HTML::style("admin/assets/file-uploader/css/jquery.fileupload.css")!!}
{!!HTML::style("admin/assets/file-uploader/css/jquery.fileupload-ui.css")!!}
        <!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript>
    {!!HTML::style("admin/assets/file-uploader/css/jquery.fileupload-noscript.css")!!}
</noscript>
<noscript>
    {!!HTML::style("admin/assets/file-uploader/css/jquery.fileupload-ui-noscript.css")!!}
</noscript>
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
    <script type="text/javascript">
        $(".deleteC").click(function(){
            var id1 = $(this).parent().attr('id');
            $(".deleteC").show("slow").parent().find("span").remove();
            var btn = $(this).parent().parent();
            $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
            $("#no").click(function(){
                $(this).parent().find(".deleteC").show("slow");
                $(this).parent().find("span").remove();
            });
            $("#yes").click(function(){
                $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                $.get("<?php echo url('contestant/remove/image') ?>/"+id1,function(data){
                    btn.hide("slow").next("hr").hide("slow");
                });
            });
        });
        $('#contestantUploadForm').on('submit',(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type:'POST',
                url:'{{url('contestant/upload/image')}}',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log("success");
                    console.log(data);
                    if(data != "")
                    {
                        $("#preview-pane").html(data);
                    }


                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                }
            });
        }));

        $("#ImageBrowse").on("change", function() {
            $("#contestantUploadForm").submit();
        });
    </script>

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
<<<<<<< HEAD
                                        <img src="{{ asset('admin/img/contestant_galley/'.$contestant->profile_image) }}" alt="">
=======
                                        <img src="{{asset(storage_path().'/images/'.$contest->profile_image) }}" alt="{{$contestant->contestant_name}}" width="370px" height="370px"/>
>>>>>>> e213ec86866ec1fb505e1c2cfaba6a0c5ccb7467
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="pro-d-title">
                                        <a href="#" class="text-capitalize">
<<<<<<< HEAD
                                           {{$contestant->full_name}}
=======
                                           {{$contestant->contestant_name}}
>>>>>>> e213ec86866ec1fb505e1c2cfaba6a0c5ccb7467
                                        </a>
                                    </h4>
                                    <div class="product_meta">
                                        <span class="posted_in"> <strong>Birthday:</strong> <a rel="tag" href="#">{{$contestant->dob}}</a></span>
                                        <span class="tagged_as"><strong>Phone Number:</strong> <a rel="tag" href="#">{{$contestant->phone}}</a></span>
                                        <span class="tagged_as"><strong>Email:</strong> <a rel="tag" href="#">{{$contestant->email}}</a></span>
                                        <span class="tagged_as"><strong>Region:</strong> <a rel="tag" href="#">{{$contestant->region->region_name}}</a></span>
                                        <span class="tagged_as"><strong>District:</strong> <a rel="tag" href="#">{{$contestant->district->district_name}}</a></span>
                                    </div>

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
                                        <h4 class="pro-d-head">Contestant Biography</h4>
                                            <?php echo $contestant->profile_note;?>
                                    </div>
                                    <div id="reviews" class="tab-pane">
                                        <h4 class="pro-d-head">Visitors Reviews</h4>
                                        @if($contestant->reviews != null && count($contestant->reviews) > 0)
                                            @foreach($contestant->reviews as $review)
                                                <article class="media">
                                                    <a class="pull-left thumb p-thumb">
                                                        <img src="{{ asset('admin/img/avatar-mini.jpg') }}">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="#" class="cmt-head">{{$review->contents}}</a>
                                                        <p> <i class="fa fa-time"></i> {{date("d,M Y",strtotime($review->date_reviewed))}}</p>
                                                    </div>
                                                </article>
                                          @endforeach
                                            @endif
                                    </div>
                                    <div id="votes" class="tab-pane">
                                        <h4 class="pro-d-head">Votes</h4>
                                        <p> Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. </p>
                                        <p> Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally. </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="row product-list" id="preview-pane">
                            @if($contestant->photos != null && count($contestant->photos) > 0)
                                @foreach($contestant->photos as $photo)
                            <div class="col-md-4">
                                <section class="panel">
                                    <div class="pro-img-box">
                                        <img src="{{ asset('admin/img/contestant_galley/images/'.$photo->gallery_path) }}" alt="">

                                         <span id="{{$photo->id}}" class="text-center"><a href="#" class="deleteC text-danger"><i class="fa fa-trash-o"></i> </a></span>
                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title">

                                            </a>
                                        </h4>
                                    </div>
                                </section>
                            </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="row" style="margin-top: 10px">
                            {!! Form::open(array('url'=>'contestant/upload/image','role'=>'form','id'=>'contestantUploadForm','files'=>true)) !!}
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                   <span class="btn btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add More images</span>
                                         <input type="file" id="ImageBrowse" name="ImageBrowse[]" multiple>
                                        <input type="hidden" name="contestant_id" id="contestant_id" value="{{$contestant->id}}">
                                        </span>
                                </div>

                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- page end-->
            </div>
        </section>
    </section>
@stop
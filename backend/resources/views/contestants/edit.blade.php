@extends('main.master')
@section('page-style')
    {!!HTML::style("admin/assets/bootstrap-fileupload/bootstrap-fileupload.css" )!!}
    {!!HTML::style("admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" )!!}
    {!!HTML::style("admin/assets/bootstrap-datepicker/css/datepicker.css"  )!!}
    {!!HTML::style("admin/assets/bootstrap-timepicker/compiled/timepicker.css"  )!!}
    {!!HTML::style("admin/assets/bootstrap-colorpicker/css/colorpicker.css"  )!!}
    {!!HTML::style("admin/assets/bootstrap-daterangepicker/daterangepicker-bs3.css"  )!!}
    {!!HTML::style("admin/assets/bootstrap-datetimepicker/css/datetimepicker.css"  )!!}

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
                <li  class="active"><a  href="{{url('contestant/create')}}">Registration</a></li>
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
@section('page-scripts-before1')
    {!!HTML::script("admin/js/jquery.validate.min.js")!!}
@stop
@section('page-scripts-before')
    {!!HTML::script("admin/assets/fuelux/js/spinner.min.js")!!}
    {!!HTML::script("admin/assets/bootstrap-fileupload/bootstrap-fileupload.js")!!}
    {!!HTML::script("admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js")!!}
    {!!HTML::script("admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js")!!}
    {!!HTML::script("admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js")!!}
    {!!HTML::script("admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js")!!}
    {!!HTML::script("admin/assets/bootstrap-daterangepicker/moment.min.js")!!}
    {!!HTML::script("admin/assets/bootstrap-daterangepicker/daterangepicker.js")!!}
    {!!HTML::script("admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js")!!}
    {!!HTML::script("admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js")!!}
    {!!HTML::script("admin/assets/jquery-multi-select/js/jquery.multi-select.js")!!}
    {!!HTML::script("admin/assets/jquery-multi-select/js/jquery.quicksearch.js")!!}
@stop
@section('page-scripts')
    {!!HTML::script("admin/js/form-validation-script.js")!!}
    {!!HTML::script("admin/js/advanced-form-components.js" )!!}
    <script>
        function getChangeImage(fileuploaded) {

            if(fileuploaded != "")
            {
                $.get("<?php echo url('contestant/uploadimage') ?>/"+fileuploaded,function(data){
                    console.log(data);
                    if(data != "")
                    {
                        $("#preview-pane").html(data);
                    }
                });
            }

        }
        $('#contestantUploadForm').on('submit',(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type:'POST',
                url:'{{url('contestant/uploadimage')}}',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log("success");
                    console.log(data);
                    if(data != "")
                    {
                        document.getElementById('uploadedFileName').value=data;
                        getChangeImage(data);
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

        $("#region").change(function () {
            var id1 = this.value;
            if(id1 != "")
            {
                $.get("<?php echo url('regions/districts') ?>/"+id1,function(data){
                    $("#district").html(data);
                });

            }else{$("#district").html("<option value=''>----</option>");}
        });

        $("#contestantForm").validate({
            rules: {
                full_name: "required",
                region: "required",
                district: "required",
                dob: "required",

            },
            messages: {
                full_name: "Please enter full name",
                region: "Please select region",
                district: "Please select district",
                dob: "Please enter date of birth",
            }
        });

    </script>

@stop
@section('page-title')
    Contestant Registration
@stop
@section('contents')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <div class="row">
                    <div class="col-lg-8"><strong>Update Contestant Details</strong></div>
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
                <div class="row">
                    <div class="col-lg-8">
                        {!! Form::open(array('url'=>'contestant/edit','role'=>'form','id'=>'contestantForm','files'=>true)) !!}
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Personal  details</legend>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="first_name">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" value="{{$contestant->full_name}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="first_name">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$contestant->email}}">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{$contestant->phone}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="first_name">Region</label>
                                        <select class="form-control" name="region" id="region">
                                            @if($contestant->region !="")
                                                <?php $reg= \App\Region::find($contestant->region_id)?>
                                            <option value="{{$reg->id}}" selected>{{$reg->region_name}}</option>
                                            @else
                                                <option value="">----select----</option>
                                                @endif
                                            @foreach(\App\Region::orderBy('region_name','ASC')->get() as $region)
                                                <option value="{{$region->id}}">{{$region->region_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="district">District</label>
                                        <select class="form-control" name="district" id="district">
                                            @if($contestant->district !="")
                                                <?php $dist= \App\District::find($contestant->district_id)?>
                                                <option value="{{$dist->id}}" selected>{{$dist->district_name}}</option>
                                            @else
                                                <option value="">----select----</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="city">City</label>
                                        <input type="text" name="city" class="form-control" value="{{$contestant->city}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="zone">Date of Birth</label>
                                        <input class="form-control form-control input-medium default-date-picker" size="16" type="text" value="{{$contestant->dob}}" name="dob">
                                    </div>
                                    <div class="col-lg-8">
                                        <label for="zone">Zone</label>
                                        <input type="text" name="zone" class="form-control" value="{{$contestant->zone}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="profile_note">Contestant short note </label>
                                <textarea class="wysihtml5 form-control" rows="10" name="profile_note">{{$contestant->profile_note}}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                        <input type="hidden" name="id" id="id" value="{{$contestant->id}}">
                                        <input type="hidden" name="uploadedFileName" id="uploadedFileName" value="{{$contestant->profile_image}}">
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        {!! Form::close() !!}
                    </div>
                    <div class="col-lg-4">

                        <div class="row">
                            <div class="col-lg-12">
                                <div id="preview-pane">
                                    <div class="preview-container text-center">
                                        @if($contestant->profile_image !="")
                                            {!! HTML::image('admin/img/contestant_galley/'.$contestant->profile_image, 'Preview', array('class' => 'jcrop-preview','width' => '90%', 'height' => '250px'))!!}
                                        @else
                                            {!! HTML::image("admin/img/profile_placeholder.png", 'Preview', array('class' => 'jcrop-preview','width' => '90%', 'height' => '250px'))!!}
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            {!! Form::open(array('url'=>'contestant/uploadimage','role'=>'form','id'=>'contestantUploadForm','files'=>true)) !!}
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                   <span class="btn btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Contestant Profile Picture</span>
                                         <input type="file" id="ImageBrowse" name="ImageBrowse">
                                        </span>
                                </div>

                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>



            </div>
        </section>

        <!-- page end-->
    </section>
@stop
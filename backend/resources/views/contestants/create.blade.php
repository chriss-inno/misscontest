@extends('main.master')
@section('page-style')
    {!!HTML::style("admin/assets/bootstrap-fileupload/bootstrap-fileupload.css" )!!}
    {!!HTML::style("admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" )!!}
    {!!HTML::style("admin/assets/bootstrap-wysihtml5/wysiwyg-color.css" )!!}
    {!!HTML::style("admin/assets/bootstrap-datepicker/css/datepicker.css"  )!!}
    {!!HTML::style("admin/assets/bootstrap-timepicker/compiled/timepicker.css"  )!!}
    {!!HTML::style("admin/assets/bootstrap-colorpicker/css/colorpicker.css"  )!!}
    {!!HTML::style("admin/assets/bootstrap-daterangepicker/daterangepicker-bs3.css"  )!!}
    {!!HTML::style("admin/assets/bootstrap-datetimepicker/css/datetimepicker.css"  )!!}

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
                contestant_name: "required",
                gender: "required",
                phone: "required",
                region: "required",
                district: "required",
                dob: "required",
                profile_img: "required"

            },
            messages: {
                contestant_name: "Please enter contestant name",
                gender: "Please select gender",
                phone: "Please enter phone number",
                region: "Please select region",
                district: "Please select district",
                dob: "Please enter date of birth",
                profile_img: "Please attach profile image"
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
                     <div class="col-lg-8"><strong>Register Contestant Details</strong></div>
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
                 {!! Form::open(array('url'=>'contestant/create','role'=>'form','id'=>'contestantForm','files'=>true)) !!}
                 <fieldset class="scheduler-border">
                     @if (count($errors) > 0)
                         <div class="alert alert-danger">
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif
                     <legend class="scheduler-border">Personal  details</legend>
                     <div class="form-group">
                         <div class="row">
                             <div class="col-lg-12">
                                 <label for="first_name">contestant Name</label>
                                 <input type="text" class="form-control" name="contestant_name" value="{{old('contestant_name')}}" placeholder="Enter here contestant name">
                                 @if($errors->first('contestant_name'))
                                     <p class=" alert-danger">{{$errors->first('contestant_name')}}</p>
                                 @endif
                             </div>
                         </div>

                     </div>
                     <div class="form-group">
                         <div class="row">
                             <div class="col-lg-6">
                                 <label for="first_name">Email</label>
                                 <input type="email" class="form-control" name="email" value="{{old('email')}}">
                                 @if($errors->first('email'))
                                     <p class=" alert-danger">{{$errors->first('email')}}</p>
                                 @endif
                             </div>
                             <div class="col-lg-6">
                                 <label for="phone">Phone</label>
                                 <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                                 @if($errors->first('phone'))
                                     <p class=" alert-danger">{{$errors->first('phone')}}</p>
                                 @endif
                             </div>
                         </div>

                     </div>
                     <div class="form-group">
                         <div class="row">
                             <div class="col-lg-4">
                                 <label for="first_name">Region</label>
                                 <select class="form-control" name="region" id="region">
                                     @if(old('region') != "")
                                         <option value="{{old('region')}}" selected><?php  $regft=\App\Region::find(old('region')); echo $regft->region_name; ?></option>
                                         @else
                                     <option value="">----select----</option>
                                     @endif
                                     @foreach(\App\Region::orderBy('region_name','ASC')->get() as $region)
                                         <option value="{{$region->id}}">{{$region->region_name}}</option>
                                         @endforeach
                                 </select>
                                 @if($errors->first('region'))
                                     <p class=" alert-danger">{{$errors->first('region')}}</p>
                                 @endif
                             </div>
                             <div class="col-lg-4">
                                 <label for="district">District</label>
                                 <select class="form-control" name="district" id="district">
                                     @if(old('district') != "")
                                         <option value="{{old('district')}}" selected><?php  $districtft=\App\District::find(old('district')); echo $districtft->district_name; ?></option>
                                     @else
                                     <option value="">----select--</option>
                                         @endif
                                 </select>
                                 @if($errors->first('district'))
                                     <p class=" alert-danger">{{$errors->first('district')}}</p>
                                 @endif
                             </div>
                             <div class="col-lg-4">
                                 <label for="city">City</label>
                                 <input type="text" name="city" class="form-control" value="{{old('city')}}">
                             </div>
                         </div>

                     </div>
                     <div class="form-group">
                         <div class="row">
                             <div class="col-lg-4">
                                 <label for="zone">Date of Birth</label>
                                 <input class="form-control form-control input-medium default-date-picker" size="16" type="text"  value="{{old('dob')}}" name="dob">
                                 @if($errors->first('dob'))
                                     <p class=" alert-danger">{{$errors->first('dob')}}</p>
                                 @endif
                             </div>
                             <div class="col-lg-4">
                                 <label for="gender">Gender</label>
                                <select name="gender" id="gender" required class="form-control">
                                    @if(old('gender') != "")
                                        <option value="{{old('gender')}}" selected>{{old('gender')}}</option>
                                    @else
                                        <option value="">--Select Gender--</option>
                                    @endif
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                 @if($errors->first('gender'))
                                     <p class=" alert-danger">{{$errors->first('gender')}}</p>
                                 @endif
                             </div>
                             <div class="col-lg-4">
                                 <label for="zone">Zone</label>
                                 <input type="text" name="zone" class="form-control">
                             </div>
                         </div>

                     </div>
                     <div class="form-group">
                         <label for="profile_note">Contestant short note </label>
                         <textarea class="wysihtml5 form-control" rows="10" name="profile_note"></textarea>
                     </div>
                     <div class="form-group">
                          <div class="row">
                              <div class="col-lg-4">
                                  <label for="profile_img">Profile Image</label>
                                  <input type="file" name="profile_img" class="form-control" required id="profile_img">
                                  @if($errors->first('profile_img'))
                                      <p class=" alert-danger">{{$errors->first('profile_img')}}</p>
                                  @endif
                              </div>
                              <div class="col-lg-2 pull-right">
                                  <input type="submit" value="Register" class="btn btn-block btn-info ">
                              </div>
                          </div>
                     </div>
                 </fieldset>
                 {!! Form::close() !!}
             </div>
         </section>
         <!-- page end-->
     </section>
 @stop
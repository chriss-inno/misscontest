@extends('main.master')
@section('page-style')
    {!!HTML::style("admin/assets/advanced-datatable/media/css/demo_page.css")!!}
    {!!HTML::style("admin/assets/advanced-datatable/media/css/demo_table.css")!!}
    {!!HTML::style("admin/assets/data-tables/DT_bootstrap.css")!!}
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
                <li><a  href="{{url('contestant/create')}}">Registration</a></li>
                <li  class="active"><a  href="{{url('contestant/manage')}}">Manage contestants</a></li>
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
@section('page-scripts-before')
    {!!HTML::script("admin/js/respond.min.js" )!!}
    {!!HTML::script("admin/assets/advanced-datatable/media/js/jquery.dataTables.js" )!!}
    {!!HTML::script("admin/assets/data-tables/DT_bootstrap.js" )!!}
@stop
@section('page-scripts')
    <script type="text/javascript">
        /* Formating function for row details */

        $(document).ready(function() {
            /*
             * Initialse DataTables, with no sorting on the 'details' column
             */
           $('#hidden-table-info').dataTable( {
               "fnDrawCallback": function( oSettings ) {


                   $(".deleteC").click(function(){
                       var id1 = $(this).parent().attr('id');
                       $(".deleteC").show("slow").parent().parent().find("span").remove();
                       var btn = $(this).parent().parent();
                       $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
                       $("#no").click(function(){
                           $(this).parent().parent().find(".deleteC").show("slow");
                           $(this).parent().parent().find("span").remove();
                       });
                       $("#yes").click(function(){
                           $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                           $.get("<?php echo url('contestant/remove') ?>/"+id1,function(data){
                               btn.hide("slow").next("hr").hide("slow");
                           });
                       });
                   });
                   //Edit Module
                   $(".editIssue").click(function(){
                       var id1 = $(this).parent().attr('id');
                       var modaldis = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                       modaldis+= '<div class="modal-dialog" style="width:80%;margin-right: 10% ;margin-left: 10%">';
                       modaldis+= '<div class="modal-content">';
                       modaldis+= '<div class="modal-header">';
                       modaldis+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                       modaldis+= '<span id="myModalLabel" class="h2 modal-title text-center" style="color: #FFF">Update Issues</span>';
                       modaldis+= '</div>';
                       modaldis+= '<div class="modal-body">';
                       modaldis+= ' </div>';
                       modaldis+= '</div>';
                       modaldis+= '</div>';
                       $('body').css('overflow','hidden');

                       $("body").append(modaldis);
                       jQuery.noConflict();
                       $("#myModal").modal("show");
                       $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                       $(".modal-body").load("<?php echo url("forex/dealslip/edit") ?>/"+id1);
                       $("#myModal").on('hidden.bs.modal',function(){
                           $("#myModal").remove();
                       })

                   })
                   //Create module
                   $(".createIsssue").click(function(){
                       var id1 = $(this).parent().attr('id');
                       var modaldis = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';

                       modaldis+= '<div class="modal-dialog" style="width:80%;margin-right: 10% ;margin-left: 10%">';
                       modaldis+= '<div class="modal-content">';
                       modaldis+= '<div class="modal-header">';
                       modaldis+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                       modaldis+= '<span id="myModalLabel" class="h2 modal-title text-center text-info text-center" style="color: #FFF;">RECORD NEW DEAL </span>';
                       modaldis+= '</div>';
                       modaldis+= '<div class="modal-body">';
                       modaldis+= ' </div>';
                       modaldis+= '</div>';
                       modaldis+= '</div>';
                       $('body').css('overflow','hidden');

                       $("body").append(modaldis);
                       jQuery.noConflict();
                       $("#myModal").modal("show");
                       $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                       $(".modal-body").load("<?php echo url("forex/dealslip/create") ?>");
                       $("#myModal").on('hidden.bs.modal',function(){
                           $("#myModal").remove();
                       })

                   });

                   //Display Item details
                   $(".showDetails").click(function(){
                       var id1 = $(this).parent().attr('id');
                       var modaldis = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';

                       modaldis+= '<div class="modal-dialog" style="width:80%;margin-right: 10% ;margin-left: 10%">';
                       modaldis+= '<div class="modal-content">';
                       modaldis+= '<div class="modal-header">';
                       modaldis+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                       modaldis+= '<span id="myModalLabel" class="h2 modal-title text-center text-info text-center" style="color: #FFF;">Customer Issue details</span>';
                       modaldis+= '</div>';
                       modaldis+= '<div class="modal-body">';
                       modaldis+= ' </div>';
                       modaldis+= '</div>';
                       modaldis+= '</div>';
                       $('body').css('overflow','hidden');

                       $("body").append(modaldis);
                       jQuery.noConflict();
                       $("#myModal").modal("show");
                       $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                       $(".modal-body").load("<?php echo url("forex/dealslip/show") ?>/"+id1);
                       $("#myModal").on('hidden.bs.modal',function(){
                           $("#myModal").remove();
                       })

                   });

                   //Show updates
                   $(".showUpdates").click(function(){
                       var id1 = $(this).parent().attr('id');
                       var modaldis = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';

                       modaldis+= '<div class="modal-dialog" style="width:70%;margin-right: 15% ;margin-left: 15%">';
                       modaldis+= '<div class="modal-content">';
                       modaldis+= '<div class="modal-header">';
                       modaldis+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                       modaldis+= '<span id="myModalLabel" class="h2 modal-title text-center text-info text-center" style="color: #FFF;">Customer Issue details Update</span>';
                       modaldis+= '</div>';
                       modaldis+= '<div class="modal-body">';
                       modaldis+= ' </div>';
                       modaldis+= '</div>';
                       modaldis+= '</div>';
                       $('body').css('overflow','hidden');

                       $("body").append(modaldis);
                       jQuery.noConflict();
                       $("#myModal").modal("show");
                       $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                       $(".modal-body").load("<?php echo url("forex/dealslip/updates") ?>/"+id1);
                       $("#myModal").on('hidden.bs.modal',function(){
                           $("#myModal").remove();
                       })

                   });
               }
           } );
        } );
    </script>
@stop
@section('contents')
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <div class="row">
                    <div class="col-lg-8"><strong>Manage Miss Tanzania Contestant Details</strong></div>
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
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                        <thead>
                        <tr>
                            <th>SNO</th>
                            <th>First name</th>
                            <th>Last Name</th>
                            <th>Birth date</th>
                            <th>District</th>
                            <th>Region</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $cont=1;?>
                        @foreach($contestants as $contestant)
                        <tr >
                            <td>{{$cont++}}</td>
                            <td>{{$contestant->first_name}}</td>
                            <td>{{$contestant->last_name}}</td>
                            <td>{{$contestant->dob}}</td>
                            <td>{{$contestant->district->district_name}}</td>
                            <td>{{$contestant->region->region_name}}</td>
                            <td id="{{$contestant->id}}">
                                <a href="{{url('contestant/show/')}}/{{$contestant->id}}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                                <a href="{{url('contestant/edit/')}}/{{$contestant->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="deleteC btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
@stop

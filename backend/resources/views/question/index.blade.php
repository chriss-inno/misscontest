@extends('main.master')
@section('page-style')
    {!!HTML::style("admin/assets/advanced-datatable/media/css/demo_page.css")!!}
    {!!HTML::style("admin/assets/advanced-datatable/media/css/demo_table.css")!!}
    {!!HTML::style("admin/assets/data-tables/DT_bootstrap.css")!!}
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
            <a href="javascript:;" class="active">
                <i class="fa fa-users"></i>
                <span>Review Questions </span>
            </a>
            <ul class="sub">
                <li class="active"><a  href="{{url('questions/manage')}}">Manage Questions</a></li>
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
                            $.get("<?php echo url('questions/remove') ?>/"+id1,function(data){
                                btn.hide("slow").next("hr").hide("slow");
                            });
                        });
                    });
                    //Edit Module
                    $(".editQuestion").click(function(){
                        var id1 = $(this).parent().attr('id');
                        var modaldis = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                        modaldis+= '<div class="modal-dialog" style="width:80%;margin-right: 10% ;margin-left: 10%">';
                        modaldis+= '<div class="modal-content">';
                        modaldis+= '<div class="modal-header">';
                        modaldis+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                        modaldis+= '<span id="myModalLabel" class="h2 modal-title text-center" style="color: #FFF">Update Question</span>';
                        modaldis+= '</div>';
                        modaldis+= '<div class="modal-body">';
                        modaldis+= ' </div>';
                        modaldis+= '</div>';
                        modaldis+= '</div>';
                        $('body').css('overflow','hidden');

                        $("body").append(modaldis);
                        $("#myModal").modal("show");
                        $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                        $(".modal-body").load("<?php echo url("questions/edit") ?>/"+id1);
                        $("#myModal").on('hidden.bs.modal',function(){
                            $("#myModal").remove();
                        })

                    })
                    //Create module
                    $(".createQuestion").click(function(){
                        var id1 = $(this).parent().attr('id');
                        var modaldis = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';

                        modaldis+= '<div class="modal-dialog" style="width:80%;margin-right: 10% ;margin-left: 10%">';
                        modaldis+= '<div class="modal-content">';
                        modaldis+= '<div class="modal-header">';
                        modaldis+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                        modaldis+= '<span id="myModalLabel" class="h2 modal-title text-center text-info text-center" style="color: #FFF;">CREATE NEW QUESTION </span>';
                        modaldis+= '</div>';
                        modaldis+= '<div class="modal-body">';
                        modaldis+= ' </div>';
                        modaldis+= '</div>';
                        modaldis+= '</div>';
                        $('body').css('overflow','hidden');

                        $("body").append(modaldis);
                        $("#myModal").modal("show");
                        $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                        $(".modal-body").load("<?php echo url("questions/create") ?>");
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
                        $("#myModal").modal("show");
                        $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                        $(".modal-body").load("<?php echo url("forex/dealslip/show") ?>/"+id1);
                        $("#myModal").on('hidden.bs.modal',function(){
                            $("#myModal").remove();
                        })

                    });

                    //Show updates
                    $(".showQuestion").click(function(){
                        var id1 = $(this).parent().attr('id');
                        var modaldis = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';

                        modaldis+= '<div class="modal-dialog" style="width:80%;margin-right: 10% ;margin-left: 10%">';
                        modaldis+= '<div class="modal-content">';
                        modaldis+= '<div class="modal-header">';
                        modaldis+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                        modaldis+= '<span id="myModalLabel" class="h2 modal-title text-center text-info text-center" style="color: #FFF;">Question details</span>';
                        modaldis+= '</div>';
                        modaldis+= '<div class="modal-body">';
                        modaldis+= ' </div>';
                        modaldis+= '</div>';
                        modaldis+= '</div>';
                        $('body').css('overflow','hidden');

                        $("body").append(modaldis);
                        $("#myModal").modal("show");
                        $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                        $(".modal-body").load("<?php echo url("questions/show") ?>/"+id1);
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
                    <div class="col-lg-8"><strong>Manage Contestant review questions</strong></div>
                    <div class="col-lg-4 pull-right">
                        <div class="btn-group btn-group-justified">
                            <a class="createQuestion btn btn-primary" href="#"><i class="fa fa-file-o"></i> Create New</a>
                            <a class="btn btn-primary" href="{{url('questions/manage')}}"><i class="fa fa-cogs"></i> Manage</a>
                            <a class="btn btn-primary" href="{{url('answers/manage')}}"><i class="fa fa-list"></i> Reviews</a>
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
                            <th>Question Title</th>
                            <th>Type</th>
                            <th>Answers</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $cont=1;?>
                        @foreach($questions as $question)
                            <tr >
                                <td>{{$cont++}}</td>
                                <td>{{$question->question_title}}</td>
                                <td class="text-center">{{$question->question_type}}</td>
                                <td class="text-center"> <a href="{{url('questions/answers')}}/{{$question->id}}" class="btn btn-success btn-xs"><i class="fa fa-list"></i></a></td>
                                <td id="{{$question->id}}" class="text-center">
                                    <a href="#" class="showQuestion btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="editQuestion btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
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

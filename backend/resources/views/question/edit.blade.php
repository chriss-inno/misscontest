{!! Form::open(array('url'=>'questions/edit','role'=>'form','id'=>'QuestionForm')) !!}
<fieldset class="scheduler-border">
    <legend class="scheduler-border" style="color:#005DAD">Question details</legend>

    <div class="form-group">
        <label for="question_title">Question Title</label>
        <input type="text" class="form-control" id="question_title" name="question_title" value="{{$question->question_title}}" >
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="status">Status</label>
                <select name="status" class="form-control" id="status">
                    @if($question->status != "")
                      <option selected value="{{$question->status}}">{{$question->status}}</option>
                    @else
                        <option selected value="">----</option>
                        @endif
                    <option value="Active">Active</option>
                    <option value="Disabled">Disabled</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="usb">Type</label>
                <select class="form-control"  id="question_type" name="question_type">
                    @if($question->status != "")
                        <option selected value="{{$question->question_type}}">{{$question->question_type}}</option>
                    @else
                        <option selected value="">----</option>
                    @endif
                    <option value="General">General</option>
                    <option value="Individual">Individual</option>
                    <option value="Location Based">Location Based</option>
                </select>
            </div>
        </div>
    </div>

</fieldset>

<div class="form-group">
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2 pull-right">
            <a href="#" data-dismiss="modal" class="btn btn-danger btn-block"> <i class="icon-remove"></i>  Cancel</a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <input type="hidden" id="id" name="id" value="{{$question->id}}">
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7 pull-left" id="output">

        </div>
    </div>
</div>
{!! Form::close() !!}
{!!HTML::script("admin/js/jquery.validate.min.js")!!}
{!!HTML::script("admin/js/form-validation-script.js")!!}
<script>

    $("#branch_id").change(function () {
        var id1 = this.value;
        if(id1 != "")
        {
            $.get("<?php echo url('getDepartment') ?>/"+id1,function(data){
                $("#department_id").html(data);
            });

        }else{$("#department_id").html("<option value=''>----</option>");}
    });

    $("#QuestionForm").validate({
        rules: {
            question_title: "required",
            question_type: "required",
            status: "required",


        },
        messages: {
            question_title: "Please title can not be empty",
            question_type: "Please question_type not be empty",
            status: "Please status can not be empty",

        },
        submitHandler: function(form) {
            $("#output").html("<h3><span class='text-info'><i class='fa fa-spinner fa-spin'></i> Making changes please wait...</span><h3>");
            var postData = $('#QuestionForm').serializeArray();
            var formURL = $('#QuestionForm').attr("action");
            $.ajax(
                    {
                        url : formURL,
                        type: "POST",
                        data : postData,
                        success:function(data)
                        {
                            console.log(data);
                            setTimeout(function() {
                                $("#output").html("");
                                location.reload();
                                $("#myModal").modal("hide");
                            }, 2000);
                        },
                        error: function(data)
                        {
                            console.log(data.responseJSON);
                            //in the responseJSON you get the form validation back.
                            $("#output").html("<h3><span class='text-info'><i class='fa fa-spinner fa-spin'></i> Error in processing data try again...</span><h3>");

                            setTimeout(function() {
                                $("#output").html("");
                            }, 2000);
                        }
                    });
        }
    });

</script>
<fieldset class="scheduler-border">
    <legend class="scheduler-border" style="color:#005DAD">Question details</legend>
    <div class="adv-table">
    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
        <thead>
        <tr>
            <th>Question Title</th>
            <th>Type</th>
            <th>Status</th>
            <th>Created By</th>
        </tr>
        </thead>
        <tbody>
            <tr >
                <td>{{$question->question_title}}</td>
                <td >{{$question->question_type}}</td>
                <td>{{$question->status}}</td>
                <td >{{$question->input_by}}</td>
            </tr>
        </tbody>
    </table>

</div>
</fieldset>
<fieldset class="scheduler-border">
    <legend class="scheduler-border" style="color:#005DAD">Related Answers</legend>
    <ol class="list-group">
        @if(count($question->answers) > 0 && $question->answers !=null)
            <?php
             $count=1;
            ?>
        @foreach($question->answers as $answer)
             <li class="list-group-item">{{$count++.". ".$answer->answer }}</li>
                @endforeach
        @endif
    </ol>
</fieldset>

    <div class="row" style="margin-top: 20px;">
        <div class="col-md-2 col-sm-2 col-xs-2 pull-right">
            <a href="#" data-dismiss="modal" class="btn btn-primary btn-block"> <i class="icon-remove"></i>  Cancel</a>
        </div>


    </div>

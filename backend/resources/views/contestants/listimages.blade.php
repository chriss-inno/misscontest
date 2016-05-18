@if($contestant->photos != null && count($contestant->photos) > 0)
    @foreach($contestant->photos as $photo)
        <div class="col-md-4">
            <section class="panel">
                <div class="pro-img-box">
                    <img src="{{ asset('admin/img/contestant_galley/images/'.$photo->gallery_path) }}" alt="" width="300" height="250">
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
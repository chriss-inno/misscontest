<fieldset class="scheduler-border">
    <legend class="scheduler-border" style="color:#005DAD">Location details</legend>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4">
                <label for="first_name">Region</label>
                <select class="form-control" name="region" id="region" onchange="getDistricts(this)">
                    <option value="">----select----</option>
                    @foreach(\App\Region::orderBy('region_name','ASC')->get() as $region)
                        <option value="{{$region->id}}">{{$region->region_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-4">
                <label for="district">District</label>
                <select class="form-control" name="district" id="district">
                    <option value="">----select--</option>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
            <label for="zone">Zone</label>
            <input type="text" name="zone" class="form-control">
    </div>
</fieldset>
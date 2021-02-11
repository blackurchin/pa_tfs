<div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Passport :</label>
    <div class="form-group col-md-4">
        <input type="text" name="passport_nr" class="form-control" id="passport_nr" placeholder="Passport Number">
    </div>
    <label class="text-center px-4">Nationality: <span class="text-danger">*</span></label>
    <div class="form-group row col-md-4">
        <select id="inputState" name="nationality" class="form-control">
            <option disabled selected>-Nationality-</option>
            {{--@foreach($nationalities as $nationality)--}}
                {{--<option value="{{$nationality->nationality}}">{{$nationality->nationality}}</option>--}}
            {{--@endforeach--}}
        </select>
    </div>
</div>

{{--Gen Info--}}
<div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Rank</label>
    <div class="form-group col-sm-4">
        <input type="text" name="rank"  class="form-control" id="inputRankCode" placeholder="Rank (Spelled-Out)">
    </div>
    <div class="form-group col-sm-4">
        <input type="text" name="rankcode" class="form-control" id="inputRankCode" placeholder="Rank (Abbreviation)">
    </div>
</div>
<div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label">Name<span class="text-danger">*</span></label>
    <div class="col-sm-4">
        <input type="text" id="firstName" placeholder="First Name" class="form-control" required>
    </div>
    <div class="col-sm-2">
        <input type="text" id="firstName" placeholder="Middle Name" class="form-control">
    </div>
    <div class="col-sm-4">
        <input type="text" id="firstName" placeholder="Last Name" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <div class="col-xs-12 col-sm-2">
        {{--Vacant--}}

    </div>
    <div class="col-xs-12 col-sm-10">
        {{--Gender--}}
        <div class="form-group row">
            <div class="form-group row col-sm-2 ml-1">
                <label for="inputState">Gender</label> <span class="text-danger">*</span>
                <select name="gender" id="inputState" class="form-control" required>
                    <option disabled selected>-Choose-</option>
                    <option value="Male" >Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            {{--Birthdate--}}
            <div class="form-group row col-sm-3 ml-1">
                <label for="birthDate">Date of Birth</label> <span class="text-danger">*</span>
                <input type="text" name="birthdate" class="form-control date" id='datepicker_birthdate' placeholder="Date of Birth" required>
            </div>
            {{--Assignment/Duty Position--}}
            <div class="form-group row col-sm-4 ml-1">
                <label for="assignDutyPosition">Assignment/Duty Position</label>
                <input type="text" name="assignment_duty_position" class="form-control" id="assignDutyPosition" placeholder="Assignment/Duty Position">
            </div>
            {{--Dietary Details--}}
            <div class="form-group row col-sm-3 ml-1">
                <label for="dietaryRestriction">Dietary Restriction</label>
                <input type="text" name="dietaryRestriction" class="form-control" id="dietaryRestriction" placeholder="(if any)">
            </div>
        </div>
    </div>
</div>
{{--//////////////////////////////Remove Address--}}
{{--Address--}}
{{--<div class="form-group row">--}}
    {{--<label for="firstName" class="col-sm-2 col-form-label">Address<span class="text-danger">*</span></label>--}}
    {{--Address--}}
        {{--<div class="form-group col-md-2">--}}
            {{--<input type="text" name="building" class="form-control" id="building" placeholder="Building or Street" required>--}}
        {{--</div>--}}
        {{--<div class="form-group col-md-3">--}}
            {{--<select name="state" id="inputState"  class="form-control" required>--}}
                {{--<option selected disabled>-Please select State-</option>--}}
                {{--@foreach($states as $state)--}}
                    {{--<option>{{$state->name}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
        {{--</div>--}}
        {{--City--}}
        {{--<div class="form-group col-md-3">--}}
            {{--<select name="city" id="inputCity" class="form-control " required>--}}
                {{--<option selected disabled>-Please select City-</option>--}}
                {{--@foreach($cities as $city)--}}
                    {{--<option>{{$city->name}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
        {{--</div>--}}
        {{--ZipCode--}}
        {{--<div class="form-group col-md-2">--}}
            {{--<input type="text" name="zip_postal_code" class="form-control" id="inputZip" placeholder="ZipCode" required>--}}
        {{--</div>--}}

{{--</div>--}}
{{--/////////////////////////////////////////////////////--}}

{{--Language--}}
<div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label">Language / Dialect</label>
        <div class="form-group col-md-3">
            <input type="text" name="language_1" class="form-control" id="language1" placeholder="Language 1" required>
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="language_2" class="form-control" id="language2" placeholder="Language 2">
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="language_3" class="form-control" id="language3" placeholder="Language 3">
        </div>


</div>
{{--Interpreter Details--}}
<div class="form-group row">
    <div class="col-xs-12 col-sm-2">
        {{--Vacant--}}
    </div>
    <div class="col-xs-12 col-sm-10">
        <div class="form-group col-sm-8">
            <label for="customRadioInline1">Interpretation Booth and Channel Required ?</label> <span class="text-danger">*</span>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="bootChannelRequired" class="custom-control-input" required>
                <label class="custom-control-label px-4" for="customRadioInline1">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="bootChannelRequired" class="custom-control-input" required>
                <label class="custom-control-label px-4" for="customRadioInline2">No</label>
            </div>
            <input type="text" name="interpreterLanguage" class="form-control" id="interpreterLanguage" placeholder="Interpreter Language">
        </div>
    </div>
</div>


{{--Gen Info--}}
<div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Rank</label>
    <div class="form-group col-sm-4">
        <input type="text" name="rank" value="{{ $profile->rank }}" class="form-control" id="inputRankCode" placeholder="Rank (Spelled-Out)">
    </div>
    <div class="form-group col-sm-4">
        <input type="text" name="rankcode" value="{{ $profile->rankcode }}" class="form-control" id="inputRankCode" placeholder="Rank (Abbreviation)">
    </div>
</div>
<div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label">Name<span class="text-danger">*</span></label>
    <div class="col-sm-4">
        <input type="text" id="firstName" name="firstname" value="{{$profile->firstname}}" placeholder="First Name" class="form-control" required>
    </div>
    <div class="col-sm-2">
        <input type="text" id="firstName" name="middlename" value="{{$profile->middlename}}" placeholder="Middle Name" class="form-control">
    </div>
    <div class="col-sm-4">
        <input type="text" id="firstName" name="lastname" value="{{$profile->lastname}}" placeholder="Last Name" class="form-control" required>
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
                    <option value="Male" {{ ($profile->gender == 'Male') ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ ($profile->gender == 'Female') ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            {{--Birthdate--}}
            <div class="form-group row col-sm-3 ml-1">
                <label for="birthDate">Date of Birth</label> <span class="text-danger">*</span>
                <input type="text" name="birthdate" value="{{$profile->birthdate}}" class="form-control date" id='datepicker_birthdate' placeholder="Date of Birth" required>
            </div>
            {{--Assignment/Duty Position--}}
            <div class="form-group row col-sm-4 ml-1">
                <label for="assignDutyPosition">Assignment/Duty Position</label>
                <input type="text" name="assignment_duty_position" value="{{$profile->assignment_duty_position}}" class="form-control" id="assignDutyPosition" placeholder="Assignment/Duty Position">
            </div>
            {{--Dietary Details--}}
            <div class="form-group row col-sm-3 ml-1">
                <label for="dietaryRestriction">Dietary Restriction</label>
                <input type="text" name="dietary_restriction" value="{{$profile->dietary_restriction}}" class="form-control" id="dietaryRestriction" placeholder="(if any)">
            </div>
        </div>
    </div>
</div>
{{--Language--}}
<div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label">Language / Dialect</label>
        <div class="form-group col-md-3">
            <input type="text" name="language_1" value="{{$profile->language_1}}" class="form-control" id="language1" placeholder="Language 1" required>
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="language_2" value="{{$profile->language_2}}" class="form-control" id="language2" placeholder="Language 2">
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="language_3" value="{{$profile->language_3}}" class="form-control" id="language3" placeholder="Language 3">
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
                <input type="radio" id="customRadioInline1" name="required_interpretation" value="Yes" class="custom-control-input" required>
                <label class="custom-control-label px-4" for="customRadioInline1">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="required_interpretation" value="No" class="custom-control-input" required>
                <label class="custom-control-label px-4" for="customRadioInline2">No</label>
            </div>
            <input type="text" name="interpreter_language" class="form-control" id="interpreterLanguage" placeholder="Interpreter Language">
        </div>
    </div>
</div>


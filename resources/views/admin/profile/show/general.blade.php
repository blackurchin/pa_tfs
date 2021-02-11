{{--Gen Info--}}
<div class="form-group form-row">
    <label class="text-center px-4"><h4>Event :</h4></label>
    <div class="col-sm-4">
        <input type="text" style="background:#00a65a;" value="{{$profile->event}}"  class="form-control" readonly>
    </div>
    <label class="col-md-2 px-2">Passport Number: </label>
    <div class="col-md-3">
        <input type="text" value="{{$profile->passport_nr}}"  class="form-control" readonly>

    </div>
</div>
<hr width="100%">
<h4>Basic Information</h4>
<div class="form-group row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
        <label for="firstName" class="col-sm-4 col-form-label">Email</label>
        <input type="text" value="{{Auth::user()->email}}"  class="form-control" readonly>
    </div>
    <div class="col-sm-3">
        <label for="firstName" class="col-sm-4 col-form-label">Gender</label>
        <input type="text" value="{{$profile->gender}}"  class="form-control" readonly>
    </div>
    <div class="col-sm-4">
        <label for="firstName" class="col-sm-4 col-form-label">Date of Birth</label>
        <input type="text" value="{{$profile->birthdate}}"  class="form-control" readonly>
    </div>

</div>
<div class="form-group row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-5">
        <label for="firstName" class="col-sm-5 col-form-label">Nationality</label>
        <input type="text" value="{{$profile->nationality}}"  class="form-control" readonly>
    </div>
    <div class="col-sm-5">
        <label for="firstName" class="col-sm-5 col-form-label">Dietary Restriction</label>
        <input type="text" value="{{$profile->dietary_restriction}}"  class="form-control" readonly>
    </div>
</div>

{{--Language--}}
<div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label">Language / Dialect</label>
        <div class="form-group col-md-3">
            <label for="firstName" class="col-sm-5 col-form-label">Language 1</label>
            <input type="text" value="{{$profile->language_1}}" class="form-control" id="language1"  readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="firstName" class="col-sm-5 col-form-label">Language 2</label>
            <input type="text" value="{{$profile->language_2}}" class="form-control" id="language2"  readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="firstName" class="col-sm-5 col-form-label">Language 3</label>
            <input type="text" value="{{$profile->language_3}}" class="form-control" id="language3"  readonly>
        </div>
</div>
{{--Interpreter Details--}}
{{--Language--}}
<div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label"></label>
    <div class="form-group col-md-5">
        <label for="firstName" class="col-sm-9 col-form-label">Interpretation Booth/Channel Required ?</label>
        <input type="text" value="{{$profile->required_interpretation}}" class="col-sm-6 form-control" id="language1"  readonly>
    </div>
    <div class="form-group col-md-5">
        <label for="firstName" class="col-md-8 col-form-label">Interpreter Language</label>
        <input type="text" value="{{$profile->interpreter_language}}" class="col-md-8 form-control" id="language2"  readonly>
    </div>

</div>



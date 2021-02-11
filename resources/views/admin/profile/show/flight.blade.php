{{--Flight Details--}}
{{--Arrival--}}
<div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Arrival :</label>
    <div class="form-group col-md-3">
        <label for="firstName" class="col-sm-10 col-form-label">Flight Number</label>
        <input type="text" value="{{$profile->flight_number_arrive}}" class="form-control"   readonly>
    </div>
    <div class="form-group col-md-2">
        <label for="firstName" class="col-sm-10 col-form-label">Date</label>
        <input type="text" value="{{$profile->arrival_date}}" class="form-control" id="language3"  readonly>
    </div>
    <div class="form-group col-md-2">
        <label for="firstName" class="col-sm-10 col-form-label">Time</label>
        <input type="text" value="{{$profile->arrival_time}}" class="form-control" id="language3"  readonly>
    </div>
    <div class="form-group col-md-3">
        <label for="firstName" class="col-sm-10 col-form-label">Airport</label>
        <input type="text" value="{{$profile->arrival_airport}}" class="form-control" id="language3"  readonly>
    </div>
</div>
{{--Departure--}}
<div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Departure :</label>
    <div class="form-group col-md-3">
        <label for="firstName" class="col-sm-10 col-form-label">Flight Number</label>
        <input type="text" value="{{$profile->flight_number_depart}}" class="form-control"   readonly>
    </div>
    <div class="form-group col-md-2">
        <label for="firstName" class="col-sm-10 col-form-label">Date</label>
        <input type="text" value="{{$profile->departure_date}}" class="form-control" id="language3"  readonly>
    </div>
    <div class="form-group col-md-2">
        <label for="firstName" class="col-sm-10 col-form-label">Time</label>
        <input type="text" value="{{$profile->departure_time}}" class="form-control" id="language3"  readonly>
    </div>
    <div class="form-group col-md-3">
        <label for="firstName" class="col-sm-10 col-form-label">Airport</label>
        <input type="text" value="{{$profile->departure_airport}}" class="form-control" id="language3"  readonly>
    </div>
</div>

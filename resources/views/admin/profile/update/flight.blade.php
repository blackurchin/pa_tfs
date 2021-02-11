{{--Flight Details--}}
{{--Arrival--}}
<div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Arrival :</label>
    <div class="form-group col-md-2">
        <input type="text" name="flight_number_arrive" class="form-control" id="flightNumber" placeholder="Flight Number">
    </div>
    <div class="form-group col-md-2">
        <input type="text" name="arrival_date" class="form-control date" id='arrivalDate'  placeholder="Arrival Date">
    </div>
    <div class="form-group col-md-3">
        <input type="text" name="arrival_time" class="form-control timepicker" id="arrivalTime" placeholder="Time of Arrival (24HR format)">
    </div>
    <div class="form-group col-md-3">
        <input type="text" name="arrival_airport" class="form-control" id="arrivalAirport" placeholder="Arrival Airport">
    </div>
</div>
{{--Departure--}}
<div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Departure :</label>
    <div class="form-group col-md-2">
        <input type="text" name="flight_number_depart" class="form-control" id="departure" placeholder="Flight Number">
    </div>
    <div class="form-group col-md-2">
        {{--<label for="inputState">Arrival</label>--}}
        <input type="text" name="departure_date" class="form-control date" id="departureDate" placeholder="Departure Date">
    </div>
    <div class="form-group col-md-3">
        {{--<label for="inputState">Arrival</label>--}}
        <input type="text" name="departure_time" class="form-control timepicker" id="departureTime" placeholder="Time of Departure (24HR format)">
    </div>
    <div class="form-group col-md-3">
        {{--<label for="inputState">Arrival</label>--}}
        <input type="text" name="departure_airport" class="form-control" id="departureAirport" placeholder="Departure Airport">
    </div>
</div>

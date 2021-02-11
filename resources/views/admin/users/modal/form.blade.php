<div class="modal-body mx-3">
    @can('admin_access')
    <div class="md-form mb-2">
        <i class="fas fa-flag prefix grey-text"></i>
        <select name="country" id="country" class="form-control" required>
            <option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.selectCountry') }}</option>
            @foreach($users as $country)
                <option value="{{$country->description}}">{{$country->description}}</option>
            @endforeach
        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-name">Country</label>
        <div class="validation"></div>
    </div>
    @endcan
    <div class="md-form mb-2">
        @can('encoder_access')
        <input type="text" id="orangeForm-name" hidden name="country" value="{{Auth::user()->country}}" class="form-control" required>
        @endcan
        <i class="fas fa-user prefix grey-text"></i>
        <input type="text" id="orangeForm-name" name="name" class="form-control" required>
        <label data-error="wrong" data-success="right" for="orangeForm-name">Full Name</label>
    </div>
    <div class="md-form mb-2">
        <i class="fas fa-envelope prefix grey-text"></i>
        <input type="email" id="orangeForm-email" name="email" class="form-control" required>
        <label data-error="wrong" data-success="right" for="orangeForm-email">Email Address</label>
    </div>
</div>

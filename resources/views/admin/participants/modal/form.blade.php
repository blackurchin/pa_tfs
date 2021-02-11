<div class="modal-body mx-3">
    <div class="md-form mb-2">
        @if(Auth::user()->hasRole(['admin']))
            <div class="form-group">
                <i class="fas fa-flag prefix grey-text"></i>
                <select name="country" id="country" class="form-control" required>
                    <option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.selectCountry') }}</option>
                        @foreach($countries as $country)
                            <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                </select>
                <div class="validation"></div>
            </div>
        @else
        <input type="text" id="orangeForm-name" hidden name="country" value="{{Auth::user()->country}}" class="form-control" required>
        @endif
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

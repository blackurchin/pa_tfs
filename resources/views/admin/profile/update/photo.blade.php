<!-- Card Details -->
<div class="form-group row">
        <div class="col-md-10">
            <div class="text-center">
                <div class="card align-items-center card text-white bg-gray-light text-xs-center">
                    <div class="card-body">
                            <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                    <div class="col-md-10 col-md-offset-1">
                                        <img src="{{asset('img/passport_avatar/official_photo.png')}}" height="150px" width="150px"  alt="passport_icon" class="img-thumbnail">
                                            <label>Upload Profile Photo</label>
                                            <input type="file" name="avatar">
                                    </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="card text-white bg-gray-light text-xs-center">
                            <div class="card-body">
                                <blockquote class="card-bodyquote">
                                    <h6 class="text-danger">Photo Requirements</h6>
                                    <ul>
                                        <li><p class="text-justify">High Resolution, Print Size, Quality, not blurry, grainy or pixelated.<p></p></li>
                                        <li><p class="text-justify">The Photo Size must be 2 x 2 Inches (51mm x 51mm)</p></li>
                                        <li><p class="text-justify">The Photo extension must be .jpeg, .jpg, .png, or .gif. </p></li>
                                    </ul>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

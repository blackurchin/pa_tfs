{{--Upload Passport Scan Copy--}}
<div class="form-group row">
    <div class="col-md-10">
        <div class="card text-white bg-gray-light text-xs-center">
            <div class="card-header bg-info"><h6 class="text-center">Passport</h6></div>
            <div class="card-body">
                <blockquote class="card-bodyquote">
                    <strong>
                        Click icon to view your Passport copy
                    </strong>
                    <hr>
                    <button title="View Scanned Copy of Authority" id="showAttch" type="button" class="btn" data-toggle="modal" data-target="#attachment_file{{ $passport_file->id }}">
                        <div class="text-center">
                            <img src="{{asset('img/passport_avatar/icon.png')}}" height="150px" width="150px"  alt="passport_icon" class="img-thumbnail">
                        </div>
                    </button>
                    <div class="modal fade attachment_file" tabindex="-1" role="dialog" aria-labelledby="attachment_file_lbl" id="attachment_file{{ $passport_file->id }}">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Details: {{$passport_file->fullname}}{{$passport_file->id}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body mb-0 p-0">
                                    <div class="text-center">
                                        {{--@if(isset($attachment->file))--}}
                                            {{--@if($attachment->file_type == 'passport')--}}
                                            <img  class="embed-responsive" src="data:image/jpeg;base64,{{$passport_file->file}}"/>
                                            {{--@endif--}}
                                        {{--@endif--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </blockquote>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Invite Participants</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.users.store')}}" method="post" role="form">
                @csrf
                @include('admin.users.modal.form')

                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success">Send Invitation</button>
                </div>
            </form>
        </div>

    </div>
</div>
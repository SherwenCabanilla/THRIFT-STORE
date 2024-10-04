<div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT INFOMATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="updateData" action="{{ route('members.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="member_id" class="form-label">Member ID</label>
                        <input type="number" class="form-control" value="" name="member_id" id="member_id"
                            readonly title="Cannot be change">
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="" id="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="dependent" class="form-label">Dependent</label>
                        <input type="number" class="form-control" name="dependent" id="dependent">
                    </div>
                    <div class="mb-3">
                        <label for="warning" class="form-label">Warning</label>
                        <input type="number" class="form-control" name="warning" id="warning">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" onclick="updata()" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

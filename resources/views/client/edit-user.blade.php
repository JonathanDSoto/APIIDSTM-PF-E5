<form action="" method="POST" class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @csrf
    @method('PUT')
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Edit User
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="mb-3">
                        <label for="name-edit" class="col-form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="name-edit" placeholder="Juan">
                    </div>
                    <div class="mb-3">
                        <label for="last-name-edit" class="col-form-label">Lastname:</label>
                        <input type="text" name="lastname" class="form-control" id="last-name-edit" placeholder="Hernandez">
                    </div>
                    <div class="mb-3">
                        <label for="email-edit" class="col-form-label">Email:</label>
                        <input type="text" name="email" class="form-control" id="email-edit" placeholder="juan@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="phone-number-edit" class="col-form-label">Phone Number:</label>
                        <input type="text" name="phone" class="form-control" id="phone-number-edit" placeholder="0000000000">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </div>
</form>

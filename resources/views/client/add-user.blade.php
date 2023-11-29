<div class="modal fade" id="addNewUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5">Add Client</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('client.store') }}" method="POST" class="addNewUser pt-0 row g-2" id="form-addNewUser">
                    @csrf
                    @method('POST')
                    <div class="col-sm-12">
                        <label class="form-label" for="name">Name</label>
                        <div class="input-group input-group-merge">
                            <span id="basicFullname2" class="input-group-text"><i class="ti ti-user"></i></span>
                            <input type="text" id="name" class="form-control dt-name" name="name"
                                placeholder="Filomeno" aria-label="Filomeno" aria-describedby="basicFullname2" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="lastname">
                            Last name
                        </label>
                        <div class="input-group input-group-merge">
                            <span id="basicPost2" class="input-group-text">
                                <i class="ti ti-user"></i>
                            </span>
                            <input type="text" id="lastname" name="lastname" class="form-control dt-lastname"
                                placeholder="Pancrasio" aria-label="Pancrasio" aria-describedby="basicPost2" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="email">
                            Email
                        </label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="ti ti-mail"></i></span>
                            <input type="text" id="email" name="email" class="form-control dt-email"
                                placeholder="elbergalarga@example.com" aria-label="elbergalarga@example.com" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label" for="phone">
                            Phone number
                        </label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="ti ti-phone"></i></span>
                            <input type="text" id="phone" name="phone"
                                class="form-control dt-phone" placeholder="0123456789" aria-label="0123456789" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">
                            Save
                        </button>
                        <button type="reset" class="btn btn-outline-secondary text-reset" data-bs-dismiss="modal"
                            aria-label="Cancel">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="offcanvas-body flex-grow-1">
    </div>
</div>
